<?php
session_start();

include ("db_connect/db_connect.php");

function look_my_projects(){

    $sql = "SELECT * FROM projects WHERE user_id ='".$_SESSION['id']."' ORDER BY date ASC";
    $result = mysql_query($sql);

    while ($row = mysql_fetch_array($result)){
        print "<div class='post format-standard box'>";
        print "<h2 class='title'><a href='post.html'>".$row['name']."</a></h2>";
        print "<p>".$row['shorttext']."</p>";
        print "<div class='details'>";
        print "<span class='icon-standard'><a href='#'>".$row['date']."</a></span>";
        print "<span class='delete'><a href='#'>Видалити</a></span>";
        print "<span class='edit'><a href='#'>Редагувати</a></span>";
        print "<span class='money'><a href='#' class='moneyThis'>".$row['money']."</a></span>";
        print "</div></div>";
    }
}