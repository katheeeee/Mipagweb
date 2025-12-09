<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \w</h1>

<p>How many alphatbetical or digit characters are in the text "W3Schools.com"?:</p>
<?php
$txt = "W3Schools.com";
$pattern = "/\w/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>
