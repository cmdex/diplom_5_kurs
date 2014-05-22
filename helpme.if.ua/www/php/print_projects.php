<?php
include("php/db_connect/db_connect.php");

function print_projects()
{
    $sql = "SELECT * FROM projects";
    $result = mysql_query($sql);

    while ($row = mysql_fetch_array($result)) {
        if (!empty($row['photo']) && empty($row['video']) && empty($row['audio'])) {
            //image format
            print "<div class='post format-image box'>";
            print "<div class='frame'><a href='post.php?id=".$row['id']."'>";
            print "<img src=" . $row['photo'] . " alt='' />";
            print "</a></div><h2 class='title'>";
            print "<a href='post.php?id=".$row['id']."'>" . $row['name'];
            print "</a></h2><p>" . $row['text'] . "</p>";
            print "<div class='details'>";
            print "<span class='icon-image'><a href='#'>" . $row['date'] . "</a></span>";
            print "<span class='likes'><a href='#' class='likeThis'>" . $row['like'] . "</a></span>";
            print "<span class='money'><a href='#' class='moneyThis'>" . $row['money'] . "</a></span>";
            print "</div></div>";
        } elseif (empty($row['photo']) && !empty($row['video']) && empty($row['audio'])) {
            //video format
            print "<div class='post format-video box'>";
            print "<div class='video frame'>".$row['video']."</div><h2 class='title'>";
            print "<a href='post.php?id=".$row['id']."'>".$row['name'];
            print "</a></h2><p>" . $row['text'] . "</p>";
            print "<div class='details'>";
            print "<span class='icon-image'><a href='#'>" . $row['date'] . "</a></span>";
            print "<span class='likes'><a href='#' class='likeThis'>" . $row['like'] . "</a></span>";
            print "<span class='money'><a href='#' class='moneyThis'>" . $row['money'] . "</a></span>";
            print "</div></div>";
        } elseif (!empty($row['photo']) && empty($row['video']) && !empty($row['audio'])) {
            print "<div class='post format-audio box'>";
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
            print "</a></h2><p>".$row['text']."</p><div class='details'>";
            print "<span class='icon-image'><a href='#'>" . $row['date'] . "</a></span>";
            print "<span class='likes'><a href='#' class='likeThis'>" . $row['like'] . "</a></span>";
            print "<span class='money'><a href='#' class='moneyThis'>" . $row['money'] . "</a></span>";
            print "</div></div>";
        } elseif (empty($row['photo']) && empty($row['video']) && empty($row['audio'])) {
            //standard format
            print "<div class='post format-standard box'>";
            print "<h2 class='title'>";
            print "<a href='post.php?id=".$row['id']."'>" . $row['name'];
            print "</a></h2><p>" . $row['text'] . "</p>";
            print "<div class='details'>";
            print "<span class='icon-image'><a href='#'>" . $row['date'] . "</a></span>";
            print "<span class='likes'><a href='#' class='likeThis'>" . $row['like'] . "</a></span>";
            print "<span class='money'><a href='#' class='moneyThis'>" . $row['money'] . "</a></span>";
            print "</div></div>";
        }
    }
}