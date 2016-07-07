
<? 
$chislo=$_GET['chis'];
if($chislo<1){ header("Location: 2.html");}
echo '<html><body>';
echo '<table border="1">';
$znac=prost($chislo);

if($znac==1) {echo $chislo; echo " - Простое";}
else {echo $chislo; echo " - Непростое";}
echo '</body></html>';
function prost($a){
$s=0;
$otv=0;
for($i=2;$i<=$a;$i++)
{$r=$a%$i;
if($r==0) $s=$s+$i;
}
if($s==$a) $otv=1;
return $otv;
}
?>