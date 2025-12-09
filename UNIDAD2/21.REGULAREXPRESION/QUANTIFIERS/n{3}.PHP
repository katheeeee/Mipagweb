<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: o{3}</h1>

<p>How many occurences of 3 preceeding o's (ooo) are in the text "W3Schools is goood"?:</p>

<?php
$txt = "W3Schools is goood";
$pattern = "/o{3}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
