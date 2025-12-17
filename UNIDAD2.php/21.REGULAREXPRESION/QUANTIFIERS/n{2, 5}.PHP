<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: o{2,5}</h1>

<p>How many occurences of at least 2 preceeding o's (oo), but not more than 5 preceeding o's (ooooo) are in the text "W3Schools is goood"?:</p>

<?php
$txt = "W3Schools is gooood";
$pattern = "/o{2,5}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>