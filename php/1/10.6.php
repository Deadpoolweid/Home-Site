<html>
<?
$rows=256;
$columns=256;
echo '<html><body>';
echo '<table border="1">';
for ($i=0;$i<$columns;$i=$i+16)
{
echo '<tr>';
for ($j=0;$j<$rows;$j=$j+16)
{
echo '<tr>';
for ($k=0;$k<256;$k=$k+16)
{

$color="rgb($i,$j,$k)"; 

echo "<td bgcolor=$color>$i,$j,$k</td>";
}
echo '</tr>';
}
echo '</tr>';
}
echo '</table>';
echo '</body></html>';
?>
</html>