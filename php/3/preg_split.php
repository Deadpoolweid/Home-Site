<table width="200"><tr><td background="1.jpg" height="40"><center><a href="1.html">�����</a></center></td><tr></table> 
<?php
// ��������� ������ �� ������������� ����� ������� � ���������� ��������, 
// ������� �������� � ����  " ", \r, \t, \n � \f
$text=$_POST['text'];
$keywords = preg_split("/[\s]+/", "$text");
print_r($keywords);

?>