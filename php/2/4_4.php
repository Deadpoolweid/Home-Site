<? 
$dl=$_GET['chis'];
if($dl<=1){ header("Location: 4.html");}
echo '<html><body>';
echo '<table border="1" width="400" height="400">';
$chet=$dl%2;
if($chet==0){$n=2;$h=3;}else{$n=1;$h=2;}
echo "<tr><td colspan=\"".$dl."\">".$dl."</td></tr>";
$flag2=1;
$flag=1;
$flag1=0;
for($i=$dl;$i>1;$i=$i-2){
	echo "<tr>";
	$e=$i-1;
	if($e>2){
		$q=$i-2;
		echo "<td rowspan=\"".$q."\">".$q."</td>";
		echo "<td colspan=\"".$q."\">".$q."</td>";
		echo "<td rowspan=\"".$e."\">".$e."</td>";}else{
		if($flag1==0){
	echo "<td>0</td>";
		if($chet==0){echo "<td >0</td>";}else{
    echo "<td rowspan=\"2\">2</td>";}
		$flag1=1;}}echo "</tr>";}
		
		if($flag1==1){
		for($i=2;$i<$dl;$i=$i+2){
		echo "<tr>";
		if($flag==1 && $chet!=0){echo "<td colspan=\"1\">".$h."</td>"; $flag=0;}else{
		echo "<td colspan=\"".$h."\">".$h."</td>";}
		$h=$h+2;
		echo "</tr>";}}
?>