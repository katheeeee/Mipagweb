<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [A-Z]</h1>

<p>How many letters in the text "Welcome to W3Schools" are alphabetically between uppercase "A" and uppercase "Z":</p>

<?php
$txt = "Welcome to W3Schools";
$pattern = "/[A-Z]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
