
<?
include "3_3.php";
$rows=4;
$columns=2;
$q=0;
$w=0;
echo '<html><body>';
echo '<table border="1">';
for ($i=0;$i<$rows;$i++){
echo'<tr>';
	for($j=0;$j<$columns;$j++)
{
if($j==0){echo"<td bgcolor=$color>$mas1[$q]</td>";$q++;}
else {echo"<td bgcolor=$color>$mas[$w]</td>";$w++;}
} /* end of for $j*/
echo '</tr>';
}
/* end of for $i*/
echo '</table>';
echo '</body></html>';
?>