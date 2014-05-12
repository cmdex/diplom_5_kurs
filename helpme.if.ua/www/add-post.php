<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Obscura</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="style/css/media-queries.css"/>
    <link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css"/>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700'
        rel="stylesheet" type='text/css'>
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all"/>
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all"/>
    <![endif]-->
    <script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/retina.js"></script>
    <script type="text/javascript" src="style/js/selectnav.js"></script>
    <script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="style/js/mediaelement.min.js"></script>
    <script type="text/javascript" src="style/js/mediaelementplayer.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.dcflickr.1.0.js"></script>
    <script type="text/javascript" src="style/js/twitter.min.js"></script>
    <script type="text/javascript">
        $.backstretch("style/images/bg/3.jpg");
    </script>
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
        <div id="menu-wrapper">
            <div id="menu" class="menu">
                <ul id="tiny">
                    <li class="active"><a href="index.php">Проекти</a>
                        <ul>
                            <li><a href="post.html">Останні проекти</a></li>
                        </ul>
                    </li>
                    <li><a href="#">FAQ</a>
                        <ul>
                            <li><a href="about.html">Про сервіс</a></li>
                            <li><a href="page.html">Як це працює</a></li>
                        </ul>
                    </li>
                    <li><a href="account-user.html">Мій профіль</a>
                        <ul>
                            <li><a href="add-post.html">Додати проект</a></li>
                            <li><a href="all-post.php">Переглянути мої проекти</a></li>
                            <li><a href="index.php">Вийти</a></li>
                        </ul>
                    </li>
                    <li><a href="contacts.html">Контакти</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
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

            <!-- Begin Form -->
            <div id="addpostform" class="addpostform">

                <div id="respond">
                    <h3 id="reply-title">Додати новий проект</h3>

                    <form action="#" method="post" id="loginform">
                        <p class="login-notes"> Ви можете описати свій проект будь якими словами, а також прикріпити
                            фото, відео або ж аудіо</p>

                        <p class="addpost-form-comment">
                            <label for="comment">Опишіть свій проект</label>
                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                        </p>

                        <p class="addpost-form-video">
                            <label for="video">Відео</label> <span class="required">*</span>
                            <input id="video" name="video" type="text" value="" size="30" aria-required='true'/>
                        </p>

                        <p class="addpost-form-photo">
                            <label for="photo">Фото</label> <span class="required">*</span>
                            <input id="photo" name="photo" type="text" value="" size="30" aria-required='true'/>
                        </p>

                        <p class="addpost-form-audio">
                            <label for="audio">Аудіо</label> <span class="required">*</span>
                            <input id="audio" name="audio" type="text" value="" size="30" aria-required='true'/>
                        </p>

                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" value="Додати проект"/>
                        </p>
                    </form>
                </div>
                <!-- #respond -->

            </div>
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