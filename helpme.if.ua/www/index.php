<?php
session_start();

include ("php/print_head.php");
include("php/menu.php");
include("php/print_projects.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php
    print_head();
    ?>
</head>
<body>
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
<div class="wrapper"><!-- Begin Intro -->


    <!-- Begin Blog Grid -->
    <div class="blog-wrap">
        <!-- Begin Blog -->
        <div class="blog-grid">
            <!-- Begin Image Format -->
            <?php
            print_projects();
            ?>
            <!-- End Blog -->
        </div>

        <!-- End Blog Grid -->

        <!-- Begin Page-navi -->
        <div id="navigation">
            <div class="nav-previous"><a href="#"><span class="meta-nav-prev">&larr; Старіші проекти</span></a></div>
            <!--
                  <div class="nav-next"><a href="#" ><span class="meta-nav-next">Новіші проекти &rarr;</span></a></div>
			 -->
        </div>
        <!-- End Page-navi -->

    </div>
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
        <!-- #first .widget-area -->
        <!-- #second .widget-area -->
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