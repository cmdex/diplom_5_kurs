<?php
require_once('TwitterOAuth.php'); //Загружаем библиотеку
//Вводим свои данные
define("CONSUMER_KEY", "EEddJ4YTCT4yx1Upzzck5L6Ic");
define("CONSUMER_SECRET", "vkieS41RBftXVe7L26OhZ1ZG0D4DCLtKWxAyWSQb3u1xYpghlD");
define("OAUTH_TOKEN", "1966457269-40aic9UiXxhLD13B3ABZ1b1yMIjKGrIg10gddF9");
define("OAUTH_SECRET", "xY62cNPyp0Nlp80uh7VIM7NYKgDM59Jx9JlgtJHpeYncn");
//Инициализируем класс
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
$content = $connection->get('account/verify_credentials');
//Постим сообщение
$connection->post('statuses/update', array('status' => "Привет Твиттерe от http://learnphp.if.ua.net !"));
header("Location: index.php");