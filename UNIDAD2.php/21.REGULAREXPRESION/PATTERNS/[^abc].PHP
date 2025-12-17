<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [^eo]</h1>

<p>How many letters in the text "Welcome" are not "e" or "o":</p>

<?php
$txt = "Welcome";
$pattern = "/[^eo]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
