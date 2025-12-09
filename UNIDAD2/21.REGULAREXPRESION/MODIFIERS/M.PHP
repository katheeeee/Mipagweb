<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: m</h1>

<p>How many times does the phrase "you" occur at the beginning of a line in the text:</p>

<pre>you are better than
you think</pre>

<?php
$txt = "you are better than\nyou think";
$pattern = "/^you/m";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<pre>
<?php
echo preg_replace($pattern, "#", $txt);
?>  
</pre>

<p>(Each match was replaced by a # character)</p>

</body>
</html>