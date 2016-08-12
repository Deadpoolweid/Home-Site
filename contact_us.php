<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Свяжись со мной</title>
    <?php require_once 'links.php' ?>
</head>
<body>
<section>
    <? require_once "coms/header.php" ?>
    <!-- content begins -->
    <section>
        <div class="head">
            <div>
                <h2>Cвяжись со мной</h2>
                <p>
                    Если у тебя есть вопросы или предложения по улучшению сайта, наполнению его контентом, либо
                    другим вопросам заполни форму ниже:
                </p>
            </div>
        </div>
        <aside>

        </aside>
        <article>
            <div class="inlineCenter">
                <figure>
                    <img src="assets/images/left.jpeg"/>
                </figure>
                <link href="assets/styles/inputs.css" rel="stylesheet" type="text/css" property="">
                <form action="" method="get" class="form">
                    <input class="input_txt" placeholder="Имя" name="Name" type="text" required autofocus>
                    <input class="input_txt" placeholder="E-mail" name="E-Mail" type="email" required>
                    <input class="input_txt" placeholder="Тема" name="Name" type="text" required>
                <textarea class="input_txt" maxlength="256" placeholder="Сообщение" name="Message"
                          required></textarea>
                    <div class="buttons">
                        <input class="button" name="Submit" type="submit" value="Отправить"/>
                        <input class="button" name="Submit" type="reset" value="Очистить"/>
                    </div>
                </form>
            </div>

        </article>
    </section>
    <!-- content ends -->
</section>
<?php require_once "coms/footer.php" ?>