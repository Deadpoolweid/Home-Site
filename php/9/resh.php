<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Полиномы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body><center>
<div id="mainPan">
  <div id="topPan"> <a href="http://www.free-css.com/"><img src="images/logo.gif" title="Liqidity Graph" alt="Liqidity Graph" width="260" height="56" border="0" class="logo" /></a>
    <ul>
      <li><a href="index.html">Главная</a></li>
      <li><a href="alg.html">Алгоритмы</a></li>
      <li class="home">Решение</li>
      <li><a href="kontakt.html">Контакты</a></li>
      <li class="contact"><a href="ya.html">О нас</a></li>
    </ul>
  </div>
  <div id="bodytopPan">
    <h2>Решаем даром</h2>
    <p><? $telo='Заполните форму (в поля следует вводить ТОЛЬКО ЧИСЛОВЫЕ значения, принадлежащие множеству ДЕЙСТВИТЕЛЬНЫХ чисел; дробь следует записывать через "точку"-".").<br>';

$telo=$telo.'<br><form autocomplete="off" action=resh_1.php method="get">
<table border="0" align="center">
<tr align="center">
	<td>A</td>
	<td></td>
	<td>B</td>
	<td></td>
	<td>C</td>
	<td></td>
	<td>D</td>
	<td></td>
</tr>
<tr>
	<td><input type=text name="A" size="10" maxlength="8" value="0"></td>
	<td>*X<sup>3</sup>+</td>
	<td><input type=text name="B" size="10" maxlength="8" value="0"></td>
	<td>*X<sup>2</sup>+</td>
	<td><input type=text name="C" size="10" maxlength="8" value="0"></td>
	<td>*X+</td>
	<td><input type=text name="D" size="10" maxlength="8" value="0"></td>
	<td>=0</td>
</tr>
<tr><td><input type=submit value=Решить></td></tr>
</table></form>';

if($_GET["er"]!=1) $telo=$telo.$_GET["pri"]."<br><br>Ответ:".$_COOKIE['otv'];

echo '<table class="all">
	<td class="text"><div class="my">'.$telo.'</div></td>
</table>'; ?> </p>
  </div>
</div>
</center></body>
</html>
