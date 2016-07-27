<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Media</title>

    <? require_once "links.php" ?>
</head>
<body>
<div id="main">
    <?php require_once "coms/header.php" ?>

    <!-- content begins -->
    <div id="content">
        <div id="left">
            <object type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"
                    data="Players/Player.swf" width="240" height="500">
                <param name="movie" value="OriginalMusicPlayerPlaylist.swf"/>
                <param name="FlashVars"
                       value="firstColor=1507ea&secondColor=#8cc540&strokeColor=#c7b81d&playlistXmlPath=Players/playlist.xml"/>
                <param name="wmode" value="opaque"/>
            </object>
        </div>
        <div id="right">
            <h1>DW Season 8 trailer</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-lBeV5bQW70" frameborder="0"
                    allowfullscreen></iframe>

            <p>
                By:
                <b>
                    <a href="http://www.youtube.com/channel/UCggccVQxXZFny58cconVANA">
                        John Smith
                    </a>
                </b>
            </p>
        </div>
    </div>
    <!-- content ends -->

    <?php require_once "coms/footer.php" ?>
