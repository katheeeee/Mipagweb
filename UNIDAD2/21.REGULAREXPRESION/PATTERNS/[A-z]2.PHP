<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [T-e]</h1>

<p>How many letters in the text "Welcome to W3Schools" are alphabetically between uppercase "T" and lowercase "e":</p>

<?php
$txt = "Welcome to W3Schools";
$pattern = "/[T-e]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
