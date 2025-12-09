<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: ^W3</h1>

<p>Does the text "W3Schools", start with "W3"?:</p>

<?php
$txt = "W3Schools";
$pattern = "/^W3/";
echo preg_match_all($pattern, $txt);
?>  

<p>This method returns 1 if there is a match, otherwise 0.</p>

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(The match was replaced by a # character)</p>

</body>
</html>
