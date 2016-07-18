<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Contact us</title>
    <?php require_once 'links.php' ?>
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

                <textarea class="input_txt no-scroll" maxlength="96" placeholder="Сообщение" cols="32" rows="3" name="Message"
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