<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [co]</h1>

<p>How many occurences of the letters "c" or "o" are in the text "W3Schools.com":</p>

<?php
$txt = "W3Schools.com";
$pattern = "/[co]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
