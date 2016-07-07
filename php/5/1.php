<?PHP
echo '<html><body>';
echo '</body></html>';

$h = fopen("my_file.html","w"); // открывает на запись файл my_file.html, если он существует, или создает пустой файл с таким именем, если его еще нет
$h = @fopen("dir/another_file.txt","w+"); // открывает на запись и чтение или создает файл another_file.txt в директории dir 

$text = "Этот текст запишем в файл."; 
if (fwrite($h,$text)) echo "Запись прошла успешно";
else echo "Произошла ошибка при записи данных"; 
fclose($h);

echo '<br>';

$h = fopen("my_file.html","a"); 
$add_text = "Добавим_текст"; 
if(fwrite($h,$add_text,13)) echo "Добавление текста прошло успешно<br>"; 
else echo "Произошла ошибка при добавлении данных<br>";
fclose($h);

echo '<br>';

$h = fopen("my_file.html","r+"); // отрываем файл на запись и чтение 
$content = fread($h,filesize("my_file.html")); // считываем содержимое файла в строку 
fclose($h);
echo $content;

echo '<br>';

$h = fopen("my_file.html","r+"); 
$content = fgets($h,2); // считает первый символ из первой строки файла my_file.html 
fclose($h); 
echo $content;

echo '<br>';

$h = fopen("my_file.html","r"); 
while (!feof ($h)) { 
$content = fgets($h); 
echo $content,"<br>"; } 
fclose($h);

echo '<br>';

$h = fopen("my_file.html","r"); 
while (!feof ($h)) { 
$content = fgetss($h,4096,'<b><i>'); 
echo $content,"<br>";} 
fclose($h);

echo '<br>';

$n = @readfile ("my_file1.html"); // выводит на экран содержимое файла и записывает его размер в переменную $n 
if (!$n) echo $n; // если функция readfile() выполнилась с ошибкой, то $n=false и выводим сообщение об ошибке
else echo "Error in readfile"; // если ошибки не было, то выводим число считанных символов

echo '<br>';

$arr = file ("my_file.html");
foreach($arr as $i => $a) echo $i,": ", htmlspecialchars($a), "<br>";
?>