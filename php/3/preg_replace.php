<?
$text=$_POST['text'];
$text = preg_replace("/סע/i", "ייי", $text);
echo "$text";
?>