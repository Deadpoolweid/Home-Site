<table width="200"><tr><td background="1.jpg" height="40"><center><a href="1.html">Назад</a></center></td><tr></table> 
<?php
// разбиваем строку по произвольному числу запятых и пробельных символов, 
// которые включают в себя  " ", \r, \t, \n и \f
$text=$_POST['text'];
$keywords = preg_split("/[\s]+/", "$text");
print_r($keywords);

?>