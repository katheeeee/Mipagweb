<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [123]</h1>

<p>How many characters in the text "W3Schools has been live since 1999" is either the number "1", "2", or "3":</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/[123]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
