!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \D</h1>

<p>How many non-digit characters are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\D/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>