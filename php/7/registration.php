<?php
$name=$_GET['name'];
$password=$_GET['password'];
$Uuu=$_GET['Uuu'];
if ( isset ($name) AND isset ($password) AND isset($Uuu) )
{
$data = File ("register.txt");
for ($i=0;$i<count($data);$i++) {
$dat = explode (";", $data[$i]);
if ($name == $dat[0])
{
echo "<b><center>��������, ������������ � ����� ������ ��� ���������������! <a href=\"index.php\">���������� ��� ���</a>";
exit;
}
}
$fp = fopen ("register.txt", "a");
fputs ($fp, $name.";".$password.";".$Uuu.";\r\n");
fclose ($fp);
echo "<b><center><h2>������� �� �����������������! <a href=\"login.php\">������ �����</a>";
exit;
}