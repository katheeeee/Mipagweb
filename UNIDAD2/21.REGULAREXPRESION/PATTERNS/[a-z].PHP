<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [e-o]</h1>

<p>How many letters in the text "Welcome" are alphabetically between "e" and "o":</p>

<?php
$txt = "Welcome";
$pattern = "/[e-o]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>