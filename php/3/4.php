<?
echo '<html><body>';
echo '';
echo '</body></html>';
 $str='<a href="http://bigworm.hol.es/php">cdsv</a>';
 function url($str){
    $t = array();
    preg_match("/(?<=\<a href=\").+(?=\">)/",$str,$t);
	return $t[0];
    print_r($t);
	}
 echo url($str);
 ?>