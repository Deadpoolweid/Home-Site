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
  echo "<b><center>Зона зарегистрированных пользователей</b><p><a href=\"proba.php\">Ссылка 1";
  exit;
  }
}
echo "Забыли пароль? Есть <a href=re_pas2.php>ВЫХОД</a>";
}
?>