<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \b</h1>

<p>Does the text "Hello World" start with "Hel"?:</p>

<?php
$txt = "Hello World";
$pattern = "/\bHel/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
