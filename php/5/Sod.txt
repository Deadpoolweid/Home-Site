<?

echo 'Содержание кода страницы скопировано в файл Sod.txt</b>';
$s=file_get_contents("2.php");
//echo "$s";
$h=fopen("Sod.txt","w");
fwrite($h,$s);
fclose($h);
?>