<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: +</h1>

<p>How many occurences of the character "n" are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/n+/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
