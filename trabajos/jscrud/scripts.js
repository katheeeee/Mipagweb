// ================================
//  SIMULADOR DE Web SQL CON localStorage
//  (para que funcione en navegadores modernos)
// ================================

if (typeof window.openDatabase !== "function") {
    console.warn("Web SQL no disponible, usando simulación con localStorage");

    function getPersonTable() {
        const data = localStorage.getItem("person_table");
        return data ? JSON.parse(data) : [];
    }

    function savePersonTable(table) {
        localStorage.setItem("person_table", JSON.stringify(table));
    }

    window.openDatabase = function (name, version, displayName, estimatedSize) {
        return {
            transaction: function (callback) {
                const tx = {
                    executeSql: function (sql, params, success, error) {
                        sql = sql.trim().toLowerCase();
                        let table = getPersonTable();

                        try {
                            // CREATE TABLE
                            if (sql.startsWith("create table")) {
                                if (success) {
                                    success(tx, {
                                        rows: { length: 0, item: () => null }
                                    });
                                }
                            }
                            // INSERT
                            else if (sql.startsWith("insert into person")) {
                                const [nombre, apellido] = params;
                                const newId =
                                    table.length > 0
                                        ? table[table.length - 1].id + 1
                                        : 1;
                                table.push({
                                    id: newId,
                                    p_nombres: nombre,
                                    p_apellidos: apellido
                                });
                                savePersonTable(table);
                                if (success) {
                                    success(tx, {
                                        insertId: newId,
                                        rowsAffected: 1,
                                        rows: { length: 0, item: () => null }
                                    });
                                }
                            }
                            // UPDATE
                            else if (sql.startsWith("update person set")) {
                                const [nombre, apellido, id] = params;
                                const idx = table.findIndex(
                                    (p) => p.id == id
                                );
                                if (idx >= 0) {
                                    table[idx].p_nombres = nombre;
                                    table[idx].p_apellidos = apellido;
                                    savePersonTable(table);
                                }
                                if (success) {
                                    success(tx, {
                                        rowsAffected: 1,
                                        rows: { length: 0, item: () => null }
                                    });
                                }
                            }
                            // SELECT * FROM person
                            else if (sql.startsWith("select * from person")) {
                                const rows = table;
                                const result = {
                                    rows: {
                                        length: rows.length,
                                        item: function (i) {
                                            return rows[i];
                                        }
                                    }
                                };
                                if (success) success(tx, result);
                            }
                            // DELETE FROM person WHERE id=?
                            else if (
                                sql.startsWith("delete from person where")
                            ) {
                                const [id] = params;
                                table = table.filter((p) => p.id != id);
                                savePersonTable(table);
                                if (success) {
                                    success(tx, {
                                        rowsAffected: 1,
                                        rows: { length: 0, item: () => null }
                                    });
                                }
                            }
                            // DELETE FROM person
                            else if (sql.startsWith("delete from person")) {
                                table = [];
                                savePersonTable(table);
                                if (success) {
                                    success(tx, {
                                        rowsAffected: 1,
                                        rows: { length: 0, item: () => null }
                                    });
                                }
                            } else {
                                console.warn(
                                    "SQL no manejado en simulación:",
                                    sql
                                );
                                if (success) {
                                    success(tx, {
                                        rows: { length: 0, item: () => null }
                                    });
                                }
                            }
                        } catch (e) {
                            console.error("Error en simulación SQL", e);
                            if (error) error(tx, e);
                        }
                    }
                };

                callback(tx);
            }
        };
    };
}

// ================================
//  CRUD ORIGINAL DE TU PROFE
// ================================

let db;

document.addEventListener("DOMContentLoaded", function () {
    // Creando la base de datos cliente
    db = window.openDatabase("data", "1.0", "data", 1 * 1024 * 1024);

    // Crea la tabla Persona
    db.transaction((t) =>
        t.executeSql(
            "create table if not exists person (id INTEGER PRIMARY KEY, p_nombres TEXT, p_apellidos TEXT)",
            [],
            function (sqlTransaction, sqlResultSet) {
                console.log("tabla creada");
                mostrarPersona();
            },
            function (sqlTransaction, sqlError) {
                console.log("error creando tabla", sqlError);
            }
        )
    );
});

// Guarda variables a la tabla Persona
function guardarPersona(tipo) {
    var Idp = document.getElementById("idp").value;
    var Nombres = document.getElementById("nombres").value;
    var Apellidos = document.getElementById("apellidos").value;

    if (Nombres.trim() === "" || Apellidos.trim() === "") {
        alert("Completa nombres y apellidos");
        return;
    }

    if (tipo == 0) {
        db.transaction((t) =>
            t.executeSql(
                "insert into person(p_nombres,p_apellidos) values (?, ?)",
                [Nombres, Apellidos],
                function () {
                    console.log("insertado");
                    document.getElementById("formu").reset();
                    mostrarPersona();
                },
                function (tx, err) {
                    console.log("error insert", err);
                }
            )
        );
    } else {
        db.transaction((t) =>
            t.executeSql(
                "update person set p_nombres=?,p_apellidos=? WHERE id=?",
                [Nombres, Apellidos, Idp],
                function () {
                    console.log("actualizado");
                    document.getElementById("formu").reset();
                    mostrarPersona();
                },
                function (tx, err) {
                    console.log("error update", err);
                }
            )
        );
    }
}

// Muestra en tabla los datos de Persona
function mostrarPersona() {
    var tbody = document.getElementById("tbody");
    tbody.innerHTML = "";

    db.transaction((t) =>
        t.executeSql(
            "select * from person",
            [],
            function (t, results) {
                for (let i = 0; i < results.rows.length; i++) {
                    var row = results.rows.item(i);
                    tbody.innerHTML +=
                        "<tr><td>" +
                        row.id +
                        "</td><td>" +
                        row.p_nombres +
                        "</td><td>" +
                        row.p_apellidos +
                        '</td><td><button onclick="borrarPersona(' +
                        row.id +
                        ')">Borrar</button></td></tr>';
                }
            },
            function (tx, err) {
                console.log("error select", err);
            }
        )
    );
}

// Borra todos los datos de la tabla Persona
function borrarTodo() {
    db.transaction((t) =>
        t.executeSql(
            "delete from person",
            [],
            function () {
                console.log("todo borrado");
                mostrarPersona();
            },
            function (tx, err) {
                console.log("error delete all", err);
            }
        )
    );
}

// Borra una persona por id
function borrarPersona(id) {
    db.transaction((t) =>
        t.executeSql(
            "delete from person where id=?",
            [id],
            function () {
                console.log("borrado id " + id);
                mostrarPersona();
            },
            function (tx, err) {
                console.log("error delete", err);
            }
        )
    );
}

