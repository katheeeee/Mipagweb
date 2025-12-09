<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \u</h1>

<p>How many occurences of the digit "9" are in the text "W3Schools has been live since 1999"?:</p>

<p>Use the hexadecimal equivalence of 9 which is 0039.</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\u{0039}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
