<? 
$name=$_POST['name'];
$password=$_POST['password'];
  if ( isset ($name) AND isset ($password))
{
$data = File ("register.txt");
for ($i=0;$i<count($data);$i++) {
$dat = explode (";", $data[$i]);
if ($name == $dat[0] && $password == $dat[1])
  {
  $_SESSION['name']=$name;
  $_SESSION['password']=$password;
  echo "<b><center>���� ������������������ �������������</b><p><a href=\"proba.php\">������ 1";
  exit;
  }
}
echo "������ ������? ���� <a href=re_pas2.php>�����</a>";
}
?>