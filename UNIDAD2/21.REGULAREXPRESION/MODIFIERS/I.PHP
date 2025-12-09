<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: i</h1>

<p>How many occurences of the letter s is in the text "W3Schools":</p>

<?php
$txt = "W3Schools";
$pattern = "/s/i";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
