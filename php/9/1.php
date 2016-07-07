<?


$a=$_GET["A"];
$b=$_GET["B"];
$c=$_GET["C"];
$d=$_GET["D"];

$pri='';
$otv="";

if(!is_numeric($a)|!is_numeric($b)|!is_numeric($c)|!is_numeric($d))
{
	header("Location: 1.php?er=1");	
	echo "$a";
}		

$pri="<br><br>A=".$a."<br>B=".$b."<br>C=".$c."<br>D=".$d;

if($a==0)
{
	if($b==0)
	{
		if($c==0)
		{
			if($d!=0)
				$otv="<br>Решение не существует.";
			else	$otv="<br>X - любое число.";
		}
		else
		{
			$s="";
			$o=round(-$d/$c,7);
			$s=$o;
			$otv="<br>X = ".$o;
		}
	}
	else
	{
		$DE=$c*$c-4*$b*$d;
		if($DE>=0)
		{
			$s="";
			$o=round((-$c+sqrt($DE))/(2*$b),7);
			$s=$o;
			$otv="<br>X<sub>1</sub> = ".$o;
			$s="";
			$o=round((-$c-sqrt($DE))/(2*$b),7);
			$s=$o;
			$otv=$otv."<br>X<sub>2</sub> = ".$o;
		}
		else
		{
			$i=round(sqrt(-$DE)/(2*$b),7);
			$o=round((-$c)/(2*$b),7);
			$otv="<br>X<sub>1</sub> = ".$o." + ".$i." 	&#183; i";
			$s="";
			$s=$o;
			$s=$o." - ".$i." 	&#183; i";
			$otv=$otv."<br>X<sub>2</sub> = ".$s;
		}
	}
}
else
{
	$b=$b/$a;
	$c=$c/$a;
	$d=$d/$a;
	$a=$b;
	$b=$c;
	$c=$d;
	$q=($a*$a-3*$b)/9;
	$r=(2*$a*$a*$a-9*$a*$b+27*$c)/54;
	if(($r*$r)<($q*$q*$q))
	{
		$t=acos($r/sqrt($q*$q*$q))/3;
		$x1=round(-2*sqrt($q)*cos($t)-$a/3,7);
		$x2=round(-2*sqrt($q)*cos($t+2*pi/3)-$a/3,7);
		$x3=round(-2*sqrt($q)*cos($t-2*pi/3)-$a/3,7);
		$otv=$otv."<br>X<sub>1</sub> = ".$x1;
		$otv=$otv."<br>X<sub>2</sub> = ".$x2;
		$otv=$otv."<br>X<sub>3</sub> = ".$x3;
	}
	else
	{
		$z=0;
		if($r>0) $z=1;
		if($r<0) $z=-1;
		$aa=-$z*pow(abs($r)+sqrt($r*$r-$q*$q*$q),1/3);
		if($aa!=0) $bb=$q/$aa;
		else $bb=0;
		$x1=round(($aa+$bb)-$a/3,7);
		if($bb==$aa)
		{
			$x2=round(-$aa-$a/3,7);
			$otv=$otv."<br>X<sub>1</sub> = ".$x1;
			$otv=$otv."<br>X<sub>2</sub> = ".$x2;
			$otv=$otv."<br>X<sub>3</sub> = ".$x2;
		}
		else
		{
			$i=round(sqrt(3)*($aa-$bb)/2,7);
			$x2=round(-$aa/2-$bb/2-$a/3,7);
			if($i>=0)
			{
				$otv=$otv."<br>X<sub>1</sub> = ".$x1;
				$otv=$otv."<br>X<sub>2</sub> = ".$x2." + ".$i."	&#183; i";
				$otv=$otv."<br>X<sub>3</sub> = ".$x2." - ".$i."	&#183; i";
			}
			else
			{
				$otv=$otv."<br>X<sub>1</sub> = ".$x1;
				$otv=$otv."<br>X<sub>2</sub> = ".$x2." + ".-$i."	&#183; i";
				$otv=$otv."<br>X<sub>3</sub> = ".$x2." - ".-$i."	&#183; i";
			}
		}
	}
}
SetCookie("otv",$otv);

header("Location: index.php?er=0&pri=$pri");	
?>