<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="lib/jplayer.js"></script>
    <script type="text/javascript" src="lib/Anison.js"></script>
    <script type="text/javascript" src="lib/jquery.min.js"></script>
</head>
<body>


<div id="main">
    <?php require_once "coms/header.php" ?>

    <!-- content begins -->
    <div id="content">

        <div>
            <div id="left">
                <div style="height:10px"></div>
                <object type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"
                        data="Players/Player.swf" width="240" height="500">
                    <param name="movie" value="OriginalMusicPlayerPlaylist.swf"/>
                    <param name="FlashVars"
                           value="firstColor=1507ea&secondColor=#8cc540&strokeColor=#c7b81d&playlistXmlPath=Players/playlist.xml"/>
                    <param name="wmode" value="opaque"/>
                </object>
            </div>
            <div id="right">
                <div class="right_box_bg">
                    <a href="#" class="a_h1"><font color="Red">DW Season 8 trailer
                        </font></a>
                    <div style="height:8px"></div>
                    <div style=" clear:both; height:10px;"></div>
                    <div style="height:10px;"></div>

                    <object id="video" type="application/x-shockwave-flash" data="players/uppod.swf" width="500"
                            height="375">
                        <param name="bgcolor" value="#ccffff"/>
                        <param name="allowFullScreen" value="true"/>
                        <param name="allowScriptAccess" value="always"/>
                        <param name="movie" value="players/uppod.swf"/>
                        <param name="flashvars"
                               value="comment=DW&amp;st=styles/video205-633.txt&amp;file=Video/DW.mp4&amp;poster=images/Leonardo.jpg"/>
                    </object>

                    <div style=" clear:both;"></div>
                    <div style="height:27px">
                    </div>
                    <div style=" clear:both; height:5px;"></div>
                    <div class="razd_v"></div>
                    <div style="height:5px;"></div>
                    <div class="datc">By: <b><a class="a_non"
                                                href="http://www.youtube.com/channel/UCggccVQxXZFny58cconVANA">John
                                Smith</a></b></div>
                    <div style=" clear:both;"></div>
                </div>
                <div style="height: 15px;"></div>

            </div>
            <div style="clear: both;"></div>
        </div>
        <div style="height:14px;"></div>
    </div>

    <!-- content ends -->
</div>

<?php require_once "coms/footer.php" ?>
