<?php
$fam=$_POST['fam'];
$name=$_POST['name'];
$otch=$_POST['otch'];
$myl=$_POST['myl'];
$nom=$_POST['nom'];

if(isset($_POST['fam'])){
if (fam($fam)==1)echo "<br>������� ������� ����������";
else echo "<br>�� ���������";
}

if(isset($_POST['name'])){
if (fam($name)==1)echo "<br>��� ������� �����!";
else echo "<br>�� ����������";
}
if(isset($_POST['otch'])){
if (fam($otch)==1)echo "<br>�������� ������� �����!";
else echo "<br>�� ����������";
}
if(isset($_POST['myl'])){
if (myl($myl)==1)echo "<br> �-mail ������ �����!";
else echo "<br>�� ����������";
}
if(isset($_POST['nom'])){
if (nom($nom)==1)echo "<br>����� ������� �����!";
else echo "<br>�� ����������";
}
function nom($n){
  return preg_match('/^[0-9]{2,10}-[0-9]{2,10}-[0-9]{2,10}$/',$n);
 }
function fam($n){
return preg_match('/^[�-�][�-�]+$/',$n);
}
function myl($n){
return preg_match('/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z0-9]+$/',$n);
}
?>