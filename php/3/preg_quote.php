
<?php
$text=$_POST['text'];
$text = preg_quote($text, "/");
echo "$text";
?>