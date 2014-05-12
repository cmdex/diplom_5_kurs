<?php
session_start();
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}
// якщо логін або пароль = "", то повертаємось на сторінку вводу
if (empty($login) or empty($password)) {
    $_SESSION['empty_string'] == "yes";
    header("Location: ../../login.php");
}
//видалення спеціальних символів, якщо такі були введені
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//видалення пропусків
$login = trim($login);
$password = trim($password);
//підключення до бази даних
include("../db_connect/db_connect.php");
//звернення до бд
$result = mysql_query("SELECT * FROM users WHERE login='$login'");
$myrow = mysql_fetch_array($result);
if (empty($myrow['password'])) {
    //якщо користувача з таким паролем не існує
    $_SESSION['bad_login'] = "yes";
    header("Location: ../../login.php");
} else {
    //якщо такий користувач є
    if ($myrow['password'] == $password) {
        //якщо паролі співпадають
        $_SESSION['id'] = $myrow['id'];
        $_SESSION['login'] = $myrow['login'];
        $_SESSION['password'] = $myrow['password'];
        $_SESSION['permission'] = $myrow['permission'];

        header("Location: ../../index.php");
    } else {
        //якщо паролі не сходяться
        $_SESSION['bad_login'] = "yes";
        header("Location: ../../login.php");
    }
}