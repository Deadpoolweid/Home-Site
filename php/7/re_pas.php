<?php
$name=$_GET['name'];
$Uuu=$_GET['Uuu'];
if ( isset ($name) AND isset ($Uuu) )
{
$data = File ("register.txt");
for ($i=0;$i<count($data);$i++) {
$dat = explode (";", $data[$i]);
if ($name == $dat[0] AND $Uuu==$dat[2])
{
echo "<b><center>O_o Поздравляем, ты помнишь МЕГА слово, и твой пароль - ".$dat[1]."";
exit;
}else{echo "Пароль не востановим, сожалею ((";}
}
}
?>