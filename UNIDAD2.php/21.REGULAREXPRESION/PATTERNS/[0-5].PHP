<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [0-5]</h1>

<p>How many characters in the text "Call 555-2368" is a digit between "0" and "5":</p>

<?php
$txt = "Call 555-2368";
$pattern = "/[0-5]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>