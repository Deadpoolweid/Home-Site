<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Contact us</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">
    <? require_once "coms/header.php" ?>


    <!-- content begins -->
    <div id="content">
        <div>
            <div id="left">
                <div style="height:15px"></div>
            </div>
            <div id="right">
                <div class="right_box_bg">
                    <div class=" right_box_top">
                        <div class="right_box_bot">
                            <div style="margin-left:10px">
                                <h1>Cвяжись со мной</h1>
                                <div style="height:8px"></div>
                                Если у тебя есть вопросы или предложения по улучшению сайта, наполнению его контентом, либо другим вопросам заполни форму ниже:
                            </div>
                            <div style="height:20px"></div>
                            <form action="" method="post">
                                <div><input class="input_txt2" value="Имя" name="Name2" type="text" required="true" autofocus="true"/></div><div style="height:5px"></div>
                                <div><input class="input_txt2" value="E-mail" name="Name" type="text" email required="true"/></div><div style="height:5px"></div>
                                <div><input class="input_txt2" value="Тема" name="Name" type="text" required="true"/></div><div style="height:5px"></div>
                                <div><p style="z-index:150,opacity: 80"><textarea class="text_area2" cols="32" rows="3" name="Message" required="true">Сообщение</textarea></p></div><div style="height:10px"></div>
                                <div>
                                    <div style="margin-left:10px">
                                        <input class="submit2" name="Submit" type="submit" value="Отправить" />
                                        <input class="submit2" name="Submit2" type="submit" value="Удалить" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div style="height:14px;"></div>
    </div>
    <!-- content ends -->

<?php require_once "coms/footer.php" ?>