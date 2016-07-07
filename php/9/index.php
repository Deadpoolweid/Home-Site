<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>САЙТ 9000</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>
<body>
<div id="wrapper">
  <div class="title">
    <div class="title-top">
      <div class="title-left">
        <div class="title-right">
          <div class="title-bottom">
            <div class="title-top-left">
              <div class="title-bottom-left">
                <div class="title-top-right">
                  <div class="title-bottom-right">
                    <h1><a >Мой сайт <span> для решения полиномов</span></a></h1>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="noscreen" />
  <div class="content">
    <div class="column-left">
      <h3>Меню</h3>
      <a href="#skip-menu" class="hidden">Skip menu</a>
      <ul class="menu">
        <li><a href="" class="active">Главная(этого сайта)</a></li>
        <li><a href="alg.html">Алгоритм</a></li>
      </ul>
    </div>
    <div id="skip-menu"></div>
    <div class="column-right">
      <div class="box">
        <div class="box-top"></div>
        <div class="box-in">
          <h2>Решите полином</h2>
          <p><? $telo='Заполните форму (в поля следует вводить ТОЛЬКО ЧИСЛОВЫЕ значения, принадлежащие множеству ДЕЙСТВИТЕЛЬНЫХ чисел; дробь следует записывать через "точку"-".").<br>';

$telo=$telo.'<br><form autocomplete="off" action=1.php method="get">
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
</table>'; ?></p>
          <br />
          
        </div>
      </div>
      <div class="box-bottom">
        <hr class="noscreen" />
      </div>
    </div>
  </div>
</div>
</body>
</html>
