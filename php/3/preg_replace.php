<?
$text=$_POST['text'];
$text = preg_replace("/��/i", "���", $text);
echo "$text";
?>