<?PHP
echo '<html><body>';
echo '</body></html>';

$h = fopen("my_file.html","w"); // ��������� �� ������ ���� my_file.html, ���� �� ����������, ��� ������� ������ ���� � ����� ������, ���� ��� ��� ���
$h = @fopen("dir/another_file.txt","w+"); // ��������� �� ������ � ������ ��� ������� ���� another_file.txt � ���������� dir 

$text = "���� ����� ������� � ����."; 
if (fwrite($h,$text)) echo "������ ������ �������";
else echo "��������� ������ ��� ������ ������"; 
fclose($h);

echo '<br>';

$h = fopen("my_file.html","a"); 
$add_text = "�������_�����"; 
if(fwrite($h,$add_text,13)) echo "���������� ������ ������ �������<br>"; 
else echo "��������� ������ ��� ���������� ������<br>";
fclose($h);

echo '<br>';

$h = fopen("my_file.html","r+"); // �������� ���� �� ������ � ������ 
$content = fread($h,filesize("my_file.html")); // ��������� ���������� ����� � ������ 
fclose($h);
echo $content;

echo '<br>';

$h = fopen("my_file.html","r+"); 
$content = fgets($h,2); // ������� ������ ������ �� ������ ������ ����� my_file.html 
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

$n = @readfile ("my_file1.html"); // ������� �� ����� ���������� ����� � ���������� ��� ������ � ���������� $n 
if (!$n) echo $n; // ���� ������� readfile() ����������� � �������, �� $n=false � ������� ��������� �� ������
else echo "Error in readfile"; // ���� ������ �� ����, �� ������� ����� ��������� ��������

echo '<br>';

$arr = file ("my_file.html");
foreach($arr as $i => $a) echo $i,": ", htmlspecialchars($a), "<br>";
?>