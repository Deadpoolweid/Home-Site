<?
echo "� ���������� " . getcwd() ." ����������:<br>";
  $dir = opendir (".");
  while ( $file = readdir ($dir))
  {
    if (( $file != ".") && ($file != ".."))
    {
      echo "$file<br>";
    }
  }
  closedir ($dir);
echo '</body></html>';
?>