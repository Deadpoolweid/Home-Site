<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Gallery</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <link href="styles.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="lib/jquery.tools.js"></script>

    <!-- Pirobox setup and styles -->
    <script type="text/javascript" src="lib/pirobox.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $().piroBox({
                my_speed: 400, //animation speed
                bg_alpha: 0.1, //background opacity
                slideShow: false, // true == slideshow on, false == slideshow off
                slideSpeed: 4, //slideshow duration in seconds(3 to 6 Recommended)
                close_all: '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox
            });
        });
    </script>
    <link href="images/style.css" rel="stylesheet" type="text/css"/>
    <!-- Pirobox setup and styles end-->
</head>

<body>
<? require_once "coms/header.php" ?>
<div id="main">

    <!-- content begins -->
    <div id="content">
        <div class="row">
            <div class="row_bot">
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big1.jpg" class="pirobox_gal1" title="Японская живопись"><img
                                src="images/img31.jpg" alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Японская живопись</h1>
                    <div style="height: 5px;"></div>
                    Для японской живописи характерно отведение ведущего места природе и изображение её в качестве
                    носительницы божественного начала.
                </div>
                <div class="box_razd"></div>
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big2.jpg" class="pirobox_gal1" title="Архитектура"><img
                                src="images/img32.jpg" alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Архитектура</h1>
                    <div style="height: 5px;"></div>
                    Традиционные деревянные жилые дома простых японцев.
                </div>
                <div class="box_razd"></div>
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big3.jpg" class="pirobox_gal1" title="Кухня"><img src="images/img33.jpg"
                                                                                                  alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Кухня</h1>
                    <div style="height: 5px;"></div>
                    Одно из наиболее популярных за пределами страны японских блюд — суши.
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
        <div style="height:15px"></div>
        <div class="row">
            <div class="row_bot">
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big4.jpg" class="pirobox_gal1" title="Напитки"><img
                                src="images/img34.jpg" alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Напитки</h1>
                    <div style="height: 5px;"></div>
                    Традиционным и популярным напитком японцев является зелёный чай.
                </div>
                <div class="box_razd"></div>
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big5.jpg" class="pirobox_gal1" title="Пейзажи"><img
                                src="images/img35.jpg" alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Пейзажи</h1>
                    <div style="height: 5px;"></div>
                    Есть в Японии особенно любимые японцами цветы.
                </div>
                <div class="box_razd"></div>
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big6.jpg" class="pirobox_gal1" title="Оригами"><img
                                src="images/img36.jpg" alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Оригами</h1>
                    <div style="height: 5px;"></div>
                    Древнее искусство складывания фигурок из бумаги.
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
        <div style="height:15px"></div>
        <div class="row">
            <div class="row_bot">
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big7.jpg" class="pirobox_gal1" title="Зима"><img src="images/img37.jpg"
                                                                                                 alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Зима</h1>
                    <div style="height: 5px;"></div>
                    Японию стоит посетить даже зимой, несмотря на довольно таки нежаркие температуры воздуха.
                </div>
                <div class="box_razd"></div>
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big8.jpg" class="pirobox_gal1" title="Дракон"><img
                                src="images/img38.jpg" alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Дракон</h1>
                    <div style="height: 5px;"></div>
                    Один из известнейших японских драконов — Ямата-но ороти (山多の大蛇).
                </div>
                <div class="box_razd"></div>
                <div class="box_img2">
                    <div class="myheight">
                        <a href="images/gallery_big9.jpg" class="pirobox_gal1" title="Аниме"><img src="images/img39.jpg"
                                                                                                  alt=""/></a>
                    </div>
                    <div style="height: 7px;"></div>
                    <h1>Аниме</h1>
                    <div style="height: 5px;"></div>
                    Аниме (или японская анимация) имеет высокую популярность во всём мире.
                    <div style="clear: both"></div>
                </div>
            </div>
            <div style="clear: both; height: 20px"></div>
        </div>
    </div>
    </duv>
</div>
<!-- content ends -->

<?php require_once "coms/footer.php" ?>
