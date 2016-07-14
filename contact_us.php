<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Contact us</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="reset.css" rel="stylesheet" type="text/css" />
    <link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="main">
    <? require_once "coms/header.php" ?>


    <!-- content begins -->
    <div id="content">
        <div class="head">
            <div>
                <h1>Cвяжись со мной</h1>
                <p>
                    Если у тебя есть вопросы или предложения по улучшению сайта, наполнению его контентом, либо
                другим вопросам заполни форму ниже:
                </p>
            </div>
        </div>
        <div id="left">
            <img src="images/left.jpeg"/>
        </div>
        <div id="right">
            <form action="" method="post">
                <input class="input_txt" placeholder="Имя" name="Name" type="text" required="true"
                       autofocus="true"/>
                <input class="input_txt" placeholder="E-mail" name="E-Mail" type="email" email
                       required="true"/>
                <input class="input_txt" placeholder="Тема" name="Name" type="text" required="true"/>
                <textarea placeholder="Сообщение" class="input_txt" cols="32" rows="3" name="Message"
                                  required="true"></textarea>
                <div class="buttons">
                    <input class="button" name="Submit" type="submit" value="Отправить"/>
                    <input class="button" name="Submit" type="reset" value="Очистить"/>
                </div>
            </form>
        </div>
    </div>
    <!-- content ends -->

<?php require_once "coms/footer.php" ?>