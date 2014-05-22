<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php
    include("php/print_head.php");
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
        include("php/menu.php");
        menu();
        ?>
        <!-- End Menu -->
    </div>
</div>
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper">
    <!-- Begin Container -->
    <div class="content-account-form">

        <!-- Begin Comment Wrapper -->
        <div id="comment-wrapper" class="box">

            <!-- Begin Standard Format -->
            <?php
            include ("php/look_my_projects.php");
            look_my_projects();
            ?>
            <!-- End Standard Format -->


            <!-- End Form -->


        </div>
        <!-- End Comment Wrapper -->

    </div>
    <!-- End Container -->

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