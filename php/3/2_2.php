<? 
$teg=$_GET['td'];
if (isNum($teg)==1)echo "Тег существует";
else echo "Тега НЕТ";
function isNum($teg){
  return preg_match('/^<(html|p|td|head|tr|table|font|a|b|br|base|bdo|big|code|dt|em|form|h1|h2|h3|h4|h5|h6|i|hr|li|meta|ol|q|span|sub|sup|th|tt|ul|var)>$/',$teg);
 }

?>