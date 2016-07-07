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
echo "<b><center>Извините, пользователь с таким именем уже зарегистрирован! <a href=\"index.php\">Попробуйте еще раз</a>";
exit;
}
}
$fp = fopen ("register.txt", "a");
fputs ($fp, $name.";".$password.";".$Uuu.";\r\n");
fclose ($fp);
echo "<b><center><h2>Спасибо вы зарегистрированны! <a href=\"login.php\">Можете войти</a>";
exit;
}