<?php
/**
 * Created by PhpStorm.
 * User: Petro
 * Date: 13.05.14
 * Time: 11:59
 */
include ("db_connect/db_connect.php");

function show_project(){
    $sql = "SELECT * FROM projects WHERE id = ".$_POST['id'];
    $result = mysql_query($sql);

    $row = mysql_fetch_array($result);

    if (!empty($row['photo']) && empty($row['video']) && empty($row['audio'])){
        print "<div class='post format-image box'><div class='details'>";
        print "<span class='icon-image'>".$row['date']."</span>";
        print "<span class='likes'><a href='#' class='likeThis>".$row['like']."</a></span>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span></div>";
        print "<h1 class='title'>".$row['name']."</h1>";
        print "<p>".$row[text]."</p><div class='post-nav'><div class='clear'></div></div></div>";
    }
}

header("Location: ../post.php");