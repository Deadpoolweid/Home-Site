
<?
$times=array("PHP"=>"14.30","Lisp"=>"12.00","Perl"=>"15.00","Unix"=>"14.00");
$lectors = array("PHP"=>"������� ����������","Lisp"=>"���� ��������","Perl"=>"���� ��������","Unix"=>"����� ���������");
define("SIGN","� ���������, �������������");
define("MEETING_TIME","18.00");
$date="12 ���";
$str = "������������, ���������" . $POST["first_name"]
. " " . $_POST["last_name"]."!<br>";
$str .= "<br>�������� ���, ��� ";
$kurses = $_POST["kurs"];
if(!isset($kurses)) {
	$event = "��������� �������� ���������";
	$str .= "$event ��������� $date ".MEETING_TIME . "<br>";
} else {
	$event = "��������� ���� ������ ��������� $date <ul>";
	for($i=0;$i<count($kurses);$i++) { 
	$k=$kurses[$i];
	$lect = $lect . "<li>������ �� $k � $time [$k]";
	$lect .= " (��� ������, $lectors[$k])";
	}
	$event = $event . $lect . "</ul>";
	$str .="$event";
	}
	$str .="<br>". SIGN;
echo $str;
?>
