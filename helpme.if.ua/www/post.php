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

<!-- Begin Main Image -->

<!-- End Main Image -->

<!-- Begin Container -->

    <!-- Begin Post -->
    <?php
    include ("php/db_connect/db_connect.php");

    function show_project(){
        $sql = "SELECT * FROM projects WHERE id = ".$_POST['id'];
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
        }
    }
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
            <li>
                <div class="frame">
                    <a href="#"><img src="style/images/art/s1.jpg"/></a>
                </div>
                <div class="meta">
                    <div class="details">
                        <span class="money"><a href="#" class="moneyThis">0.33</a></span>
                    </div>
                    <h6><a href="#">@transGaz</a></h6>
                    <em>Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС.
                        #robota</em>
                </div>
            </li>
            <li>
            <li>
                <div class="frame">
                    <a href="#"><img src="style/images/art/s1.jpg"/></a>
                </div>
                <div class="meta">
                    <div class="details">
                        <span class="money"><a href="#" class="moneyThis">0.33</a></span>
                    </div>
                    <h6><a href="#">@transGaz</a></h6>
                    <em>Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС.
                        #robotaу</em>
                </div>
            </li>
            <li>
                <div class="frame">
                    <a href="#"><img src="style/images/art/s1.jpg"/></a>
                </div>
                <div class="meta">
                    <div class="details">
                        <span class="money"><a href="#" class="moneyThis">0.33</a></span>
                    </div>
                    <h6><a href="#">@transGaz</a></h6>
                    <em>Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС.
                        #robota</em>
                </div>
            </li>
            <li>
                <div class="frame">
                    <a href="#"><img src="style/images/art/s1.jpg"/></a>
                </div>
                <div class="meta">
                    <div class="details">
                        <span class="money"><a href="#" class="moneyThis">0.33</a></span>
                    </div>
                    <h6><a href="#">@transGaz</a></h6>
                    <em>Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС.
                        #robota</em>
                </div>
            </li>
            <li>
                <div class="frame">
                    <a href="#"><img src="style/images/art/s1.jpg"/></a>
                </div>
                <div class="meta">
                    <div class="details">
                        <span class="money"><a href="#" class="moneyThis">0.33</a></span>
                    </div>
                    <h6><a href="#">@transGaz</a></h6>
                    <em>Требуются специалисты по поиску земельных участков (аренда, выкуп) под строительство АГЗС.
                        #robota</em>
                </div>
            </li>
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
        <!-- #first .widget-area -->

        <div id="second" class="widget-area">
            <div id="twitter-2" class="widget widget_twitter">
                <h3 class="widget-title">Twitter</h3>

                <div id="twitter-wrapper">
                    <div id="twitter"></div>
                    <span class="username"><a href="#">Тут стрічка з нашого твітера</a></span>
                </div>
            </div>
        </div>
        <!-- #second .widget-area -->

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
        <!-- #third .widget-area -->

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