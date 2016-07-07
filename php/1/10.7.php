<html>
<?
$rows=10;
$columns=10;
echo '<html><body>';
echo '<table border="1">';
for ($i=1;$i<=$columns;$i++)
{
echo '<tr>';
for ($j=1;$j<=$rows;$j++)
{
$k=$i*$j;
echo "<td>$k</td>";
}
echo '</tr>';
}
echo '</table>';
echo '</body></html>';
?>
</html>