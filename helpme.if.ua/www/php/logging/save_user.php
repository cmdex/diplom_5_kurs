<?
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$cash = $_POST['cash'];
//якщо не заповнені поля
if (empty($login) or empty($password) or empty($name) or empty($surname) or empty($email)) {
    $_SESSION['empty_string'] = "yes";
    header("Location: ../../registration.php");
} else {
    //видаляєм лишні символи
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    //видаляєм пропуски
    $login = trim($login);
    $password = trim($password);
    //підключення до бд
    include("../db_connect/db_connect.php");
    //перевіряєм чи є такий логін в бд
    $result = mysql_query("SELECT id FROM users WHERE login='$login'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
        $_SESSION['bad_login'] = "yes";
        header("Location: ../../registration.php");
    } else {
        //якщо немає, то додаємо дані в бд
        $result2 = mysql_query("INSERT INTO users (login,password,permission,name,surname,e_mail,cash) VALUES('$login','$password','user','$name','$surname','$email','$cash')");
        //перевіряєм чи дані додані в бд
        if ($result2 == 'TRUE') {
            header("Location: ../../index.php");
        } else {
            $_SESSION['error'] = "yes";
            header("Location: ../../registration.php");
            //якщо помилка
        }
    }
}