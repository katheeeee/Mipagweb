<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: cat|dog|fish</h1>

<p>How many occurrences of either "cat", "dog", or "fish" are in the text "We have three dogs, one fish, but no cats":</p>

<?php
$txt = "We have three dogs, one fish, but no cats";
$pattern = "/cat|dog|fish/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>