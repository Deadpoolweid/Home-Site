<?
$tit=$_GET['t'];
$x=$_GET['x'];
echo "Результат<font color=#000090><b> $x </b></font>:<br>";
if($tit==1){$x="/<title>.*".$x.".*<\/title>/i";}
else {$x="/".$x."/i";}
poi("..",$x);


function poi($dir,$x){
$i=0;$j=0;
if (is_dir($dir."/")) {
    if ($dh = @opendir($dir."/")) {
        while (($file = @readdir($dh)) !== false) {
		if(@filetype($dir."/" . $file)!==dir) $f[$i++]=$file;
		else $d[$j++]=$file;
        }
    }@closedir($dh);
}
for($i=0;$f[$i];$i++){
if(preg_match("/(.+\.html$)|(.+\.php$)/i",$f[$i])==1){
smo($f[$i],$dir,$x);
}
}
for($i=2;$d[$i];$i++){
poi($dir."/".$d[$i],$x);
}
}

function smo($dir,$p,$x){
	clearstatcache ();
	$s=@file_get_contents($p."/".$dir);
	if(preg_match_all($x,$s,$m)!=0){
		echo "<a href=$p/$dir> $p/$dir </a><br>";
	}
	$s=0;
}
?>