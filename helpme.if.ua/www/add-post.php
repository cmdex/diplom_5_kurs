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

            <!-- Begin Form -->
            <div id="addpostform" class="addpostform">

                <div id="respond">
                    <h3 id="reply-title">Додати новий проект</h3>

                    <form action="php/add_project.php" method="post" id="loginform">
                        <p class="login-notes"> Ви можете описати свій проект будь якими словами, а також прикріпити
                            фото, відео або ж аудіо</p>

                        <p class="addpost-form-comment">
                            <label for="comment">Заголовок проекту*</label>
                            <input type="text" name="name" value="" maxlength="250"/>
                            <label for="comment">Короткий опис проекту*</label>
                            <textarea id="comment" name="shorttext" aria-required="true" maxlength="250"></textarea>
                            <label for="comment">Повний опис проекту*</label>
                            <textarea id="comment" name="text" cols="45" rows="8" aria-required="true"></textarea>
                        </p>

                        <div id='content-add'>
                            <!-- modal content -->
                            <div id='basic-foto'>
                                <input type='button' name='basic' value='Додати фото' class='basic'/>
                            </div>
                            <div id="content-foto">
                                <form action="php/upload.php" method="post">
                                <h3>Додати фото</h3>
                                    <p class="addpost-form-photo">
                                        <label for="photo">Повне посилання на фото</label>
                                        <input id="photo" name="photo" type="text" value="" size="30"
                                               aria-required='true'/>
                                        <label for="photo">Або виберіть з компютера</label>
                                        <input name="submit" type="file" value="Додати фото"/>
                                    </p>
                                    <input name="submit" type="submit"  value="Зберегти"/>
                                </form>
                            </div>
                            <!-- modal content -->
                            <div id='basic-video'>
                                <input type='button' name='basic' value='Додати відео' class='basic'/>
                            </div>
                            <div id="content-video">
                                <h3>Додати відео</h3>

                                <p class="addpost-form-video">
                                    <label for="video">Повне посилання на відео</label>
                                    <input id="video" name="video" type="text" value="" size="30" aria-required='true'/>
                                    <label for="video">Або виберіть з компютера</label>
                                    <input name="submit" type="file" id="submit" value="Додати відео"/>
                                </p>
                                <input name="submit" type="submit" id="submit" value="Зберегти"/>
                            </div>
                            <!-- modal content -->
                            <div id='basic-audio'>

                                <input type='button' name='basic' value='Додати аудіо' class='basic'/>
                            </div>
                            <div id="content-audio">
                                <h3>Додати аудіо</h3>

                                <p class="addpost-form-audio">
                                    <label for="audio-artist">Виконавець</label>
                                    <input id="audio-artist" name="audio-artist" type="text" value="" size="30"
                                           aria-required='true'/>
                                    <label for="audio-treck">Назва пісні</label>
                                    <input id="audio-treck" name="audio-treck" type="text" value="" size="30"
                                           aria-required='true'/>
                                    <label for="audio-album">Назва альбому</label>
                                    <input id="audio-album" name="audio-album" type="text" value="" size="30"
                                           aria-required='true'/>
                                    <label for="treck">Виберіть пісню з компютера</label>
                                    <input name="submit" type="file" id="submit" value="Додати аудіо"/>
                                </p>
                                <input name="submit" type="submit" id="submit" value="Зберегти"/>
                            </div>
                        </div>
                        <br/>

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
        <!-- #first .widget-area --

                <div id="second" class="widget-area">
                    <div id="twitter-2" class="widget widget_twitter">
                            <h3 class="widget-title">Twitter</h3>

                            <div id="twitter-wrapper">
                                <div id="twitter"></div>
                                <span class="username"><a href="#">Тут стрічка з нашого твітера</a></span>
                            </div>
                    </div>
                </div><!-- #second .widget-area --

                <div id="third" class="widget-area">
                <div id="example-widget-3" class="widget example">
                    <h3 class="widget-title">Популярні рекламодавці</h3>
                    <ul class="post-list">
                          <li>
                              <div class="frame">
                                  <a href="#"><img src="style/images/art/s1.jpg" /></a>
                              </div>
                            <div class="meta">
                                <h6><a href="#">@transGaz</a></h6>
                                <em>від Сер 2013</em>
                            </div>
                        </li>
                        <li>
                              <div class="frame">
                                  <a href="#"><img src="style/images/art/s2.jpg" /></a>
                              </div>
                            <div class="meta">
                                <h6><a href="#">SoftServ</a></h6>
                                <em>від Кві 2014</em>
                            </div>
                        </li>
                        <li>
                              <div class="frame">
                                  <a href="#"><img src="style/images/art/s3.jpg" /></a>
                              </div>
                            <div class="meta">
                                <h6><a href="#">OSF Global</a></h6>
                                <em>від Кві 2014</em>
                            </div>
                        </li>
                    </ul>

                </div>
                </div><!-- #third .widget-area --

                <div id="fourth" class="widget-area">
                <div class="widget">
                    <h3 class="widget-title">Flickr</h3>
                    <ul class="flickr-feed"></ul>

                </div>
                </div><!-- #fourth .widget-area -->
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
<script type='text/javascript' src='style/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='style/js/basic.js'></script>
</body>
</html>