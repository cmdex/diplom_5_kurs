<?php
session_start();
//include
include("php/print_head.php");
include("php/menu.php");
include ("php/db_connect/db_connect.php");
//functions
function show_project(){
    $sql = "SELECT * FROM projects WHERE id = ".$_GET['id'];
    $result = mysql_query($sql);

    $row = mysql_fetch_array($result);

    if (!empty($row['photo']) && empty($row['video']) && empty($row['audio'])){
        print "<div class='main-image'><div class='outer'>";
        print "<span class='inset'><img src=".$row['photo']." alt=''/></span>";
        print "</div></div><div class='content'>";
        print "<div class='post format-image box'><div class='details'>";
        print "<span class='icon-image'>".$row['date']."</span>";
        print "<span class='likes'><a href='#' class='likeThis'>".$row['like']."</a></span>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span>";
        print "</div><h1 class='title'>".$row['name']."</h1>";
        print "<p>".$row[text]."</p></div>";
    } elseif (empty($row['photo']) && !empty($row['video']) && empty($row['audio'])){
        print "<div class='content'>";
        print "<div class='post format-image box'><div class='details'>";
        print "<span class='icon-image'>".$row['date']."</span>";
        print "<span class='likes'><a href='#' class='likeThis'>".$row['like']."</a></span>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span>";
        print "</div><div class='video frame'>".$row['video']."</div><h1 class='title'>".$row['name']."</h1>";
        print "<p>".$row[text]."</p></div>";
        print <<<HERE
<script>
    video_width = $(".content").css("width");
    $("iframe").css("width", video_width);
</script>
HERE;

    } elseif (!empty($row['photo']) && empty($row['video']) && !empty($row['audio'])){
        print "<div class='content'>";
        print "<div class='post format-audio box'><div class='details'>";
        print "<span class='icon-image'>".$row['date']."</span>";
        print "<span class='likes'><a href='#' class='likeThis'>".$row['like']."</a></span>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span></div>";
        print "<div class='audio-wrapper'><div class='vinyl'><dl><dt class='art'>";
        print "<img class='highlight' src='../style/images/vinyl.png' />";
        print "<img src=" . $row['photo'] . " alt='' /></dt>";
        print "<dd class='song'><div class='icon-song'></div>" . $row['song'] . "</dd>";
        print "<dd class='artist'><div class='icon-artist'></div>" . $row['artist'] . "</dd>";
        print "<dd class='album'><div class='icon-album'></div>" . $row['album'] . "</dd>";
        print "</dl></div><div class='clear'></div><div class='audio'>";
        print "<audio controls='' preload='none' src=" . $row['audio'] . "></audio></div></div>";
        print "<h2 class='title'>";
        print "<a href='post.php?id=".$row['id']."'>" . $row['name'];
        print "</a></h2><p>".$row['text']."</p>";
        print "</div></div><div>";
    } elseif (empty($row['photo']) && empty($row['video']) && empty($row['audio'])){
        print "<div class='content'>";
        print "<div class='post format-image box'><div class='details'>";
        print "<span class='icon-image'>".$row['date']."</span>";
        print "<span class='likes'><a href='#' class='likeThis'>".$row['like']."</a></span>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span></div>";
        print "<h1 class='title'>".$row['name']."</h1>";
        print "<p>".$row[text]."</p></div>";
    }
    $_SESSION['project_id'] = $row['id'];
    $_SESSION['REQUEST_URI'] = $_SERVER[REQUEST_URI];
}
function print_advertising(){
    $sql = "SELECT * FROM advertising ORDER BY money DESC";
    $result = mysql_query($sql);

    while($row = mysql_fetch_array($result)){
        print "<li>";
        print "<div class='frame'>";
        print "<a href='social/tw/post_tweet.php?id=".$row['id']."'><img src='style/images/art/s1.jpg'/></a>";
        print "</div>";
        print "<div class='meta'>";
        print "<div class='details'>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span>";
        print "</div>";
        print "<h6><a href='#'>".$row['name']."</a></h6>";
        print "<em>".$row['text']."</em>";
        print "</div>";
        print "</li>";
    }
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php
    print_head();
    ?>
</head>
<body class="single">

<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
    <div class="header">
        <!-- Begin Logo -->
        <div class="logo">
            <a href="index.php">
                <img src="style/images/logo.png" alt=""/>
            </a>
        </div>
        <!-- End Logo -->
        <!-- Begin Menu -->
        <?php
        menu();
        ?>
        <!-- End Menu -->
    </div>
</div>
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper">

<!-- Begin Main Image -->

<!-- End Main Image -->

<!-- Begin Container -->

    <!-- Begin Post -->
    <?php
    show_project();
    ?>
    <!-- End Post -->

    <!-- Begin Comment Wrapper -->

    <!-- End Comment Wrapper -->

</div>
<!-- End Container -->

<!-- Begin Sidebar -->
<div class="sidebar box">
    <div class="sidebox widget">
        <h3 class="widget-title">Вибрати рекламодявця</h3>
        <ul class="post-list">
            <?php
            print_advertising();
            ?>
        </ul>
    </div>

</div>
<!--End Sidebar -->
<div class="clear"></div>

</div>
<!-- End Wrapper -->

<!-- Begin Footer -->
<div class="footer-wrapper">
    <div id="footer" class="four">
        <div id="first" class="widget-area">
            <div class="widget widget_search">
                <h3 class="widget-title">Пошук</h3>

                <form class="searchform" method="get" action="#">
                    <input type="text" name="s" value="Пошук" onFocus="this.value=''" onBlur="this.value='Пошук'"/>
                </form>
            </div>
            <div class="widget widget_archive">
                <h3 class="widget-title">Архів проектів</h3>
                <ul>
                    <li><a href="#">Вересень 2014</a> (1)</li>
                    <li><a href="#">Жовтень 2014</a> (2)</li>
                    <li><a href="#">Квітень 2014</a> (0)</li>
                    <li><a href="#">Травень 2014</a> (1)</li>
                </ul>
            </div>
        </div>

        <!-- #first .widget-area --

        <div id="second" class="widget-area">
            <div id="twitter-2" class="widget widget_twitter">
                <h3 class="widget-title">Twitter</h3>

                <div id="twitter-wrapper">
                    <div id="twitter"></div>
                    <span class="username"><a href="#">Тут стрічка з нашого твітера</a></span>
                </div>
            </div>
        </div>
        <!-- #second .widget-area --

        <div id="third" class="widget-area">
            <div id="example-widget-3" class="widget example">
                <h3 class="widget-title">Популярні рекламодавці</h3>
                <ul class="post-list">
                    <li>
                        <div class="frame">
                            <a href="#"><img src="style/images/art/s1.jpg"/></a>
                        </div>
                        <div class="meta">
                            <h6><a href="#">@transGaz</a></h6>
                            <em>від Сер 2013</em>
                        </div>
                    </li>
                    <li>
                        <div class="frame">
                            <a href="#"><img src="style/images/art/s2.jpg"/></a>
                        </div>
                        <div class="meta">
                            <h6><a href="#">SoftServ</a></h6>
                            <em>від Кві 2014</em>
                        </div>
                    </li>
                    <li>
                        <div class="frame">
                            <a href="#"><img src="style/images/art/s3.jpg"/></a>
                        </div>
                        <div class="meta">
                            <h6><a href="#">OSF Global</a></h6>
                            <em>від Кві 2014</em>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!-- #third .widget-area --

        <div id="fourth" class="widget-area">
            <div class="widget">
                <h3 class="widget-title">Flickr</h3>
                <ul class="flickr-feed"></ul>

            </div>
        </div>
        <!-- #fourth .widget-area -->
    </div>
</div>
<div class="site-generator-wrapper">
    <center>
        <div class="site-generator">Design by <a href="http://bobrja.if.ua/">bobrja</a>.</div>
    </center>
    <ul class="social">
        <li><a class="rss" href="#"></a></li>
        <li><a class="facebook" href="#"></a></li>
        <li><a class="twitter" href="#"></a></li>
        <li><a class="pinterest" href="#"></a></li>
        <li><a class="dribbble" href="#"></a></li>
        <li><a class="flickr" href="#"></a></li>
        <li><a class="linkedin" href="#"></a></li>
    </ul>
    <!-- End Intro -->
</div>
<!-- End Footer -->
<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>