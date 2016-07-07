<?
$chis=$_GET['chis'];
$vchis=$_GET['vchis'];
$tel=$_GET['tel'];
$gtel=$_GET['gtel'];
$nchis=$_GET['nchis'];
$nechis=$_GET['nechis'];
$nebuk=$_GET['nebuk'];
$neUID=$_GET['neUID'];
$marr=array(1,2,3,4,5);
$n=6;
$k=3;
if(isset($_GET['chis'])){
if (isNum($chis)==1)
echo "123";
else echo "НЕ целое";
}

if(isset($_GET['vchis'])){
if (isReal($vchis)==1)echo "Число вещественное";
else echo "НЕ вещественное";
}

if(isset($_GET['tel'])){
if (isTelephone($tel)==1)echo "Правлиьный телефонный номер";
else echo "НЕ Правлиьный телефонный номер";
}

if(isset($gtel)){
if (isTelephone2($gtel)==1)echo "Правлиньный телефонный номер с кодом";
else echo "НЕ правлиньный телефонный номер с кодом";
}

if(isset($nchis)){
if (notNum($nchis)==1)echo "Не число";
else echo "число";
}

if(isset($nechis)){
if (notNum1($nechis)==1)echo "Не содержит цифр";
else echo "Содержит";
}

if(isset($nebuk)){
if (notChar($nebuk)==1)echo "Не содержит букв";
else echo "Содержит";
}

$neUID=$_GET['neUID'];
$exp = "/^[_A-Za-z]\w+$/";
if (preg_match($exp, $neUID)) echo $neUID.' - Является идентификатором';
else echo $neUID.' - Не является идентификатором';


function isNum($n){
  return preg_match('/^[0-9]+$/',$n);
 }
 
 
 function isReal($n){
  return preg_match('/^[0-9]+\.[0-9]+$/',$n);
 }
 
function isTelephone($n){
  return preg_match('/^[0-9]{2,10}-[0-9]{2,10}-[0-9]{2,10}$/',$n);
 }
 
 function isTelephone2($n){
  return preg_match('/^\([0-9]{3}\)[0-9]{1,10}-[0-9]{2,10}-[0-9]{2,10}$/',$n);
 }
 
  function notNum($n){
  return preg_match('/[^0-9]/',$n);
 }
 

function notNum1($n){
  return preg_match('/^[^\d]+$/',$n);
 }
 
function notChar($n){
  return preg_match('/^[^a-zA-Zа-яА-Я]+$/',$n);
 }



 ?>