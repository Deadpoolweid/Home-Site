
<?php
// ¬озвращает все элементы массива,
// содержащие числа с плавающей точкой
$text=$_POST['text'];
$fl_text = preg_grep("/^(\d+)?\.\d+$/", $text);
print_r($fl_text);
?>