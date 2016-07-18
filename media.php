<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Media</title>

    <? require_once "/links.php" ?>
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
            <object id="video" type="application/x-shockwave-flash" data="players/uppod.swf" width="500"
                    height="375">
                <param name="bgcolor" value="#ccffff"/>
                <param name="allowFullScreen" value="true"/>
                <param name="allowScriptAccess" value="always"/>
                <param name="movie" value="players/uppod.swf"/>
                <param name="flashvars"
                       value="comment=DW&amp;st=styles/video205-633.txt&amp;file=Video/DW.mp4&amp;poster=images/Leonardo.jpg"/>
            </object>

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
