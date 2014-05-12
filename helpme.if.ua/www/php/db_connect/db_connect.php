<?php
/**
 * Created by PhpStorm.
 * User: Petro
 * Date: 08.05.14
 * Time: 18:59
 */
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "helpme");

mysql_connect(HOST, USER, PASSWORD) or die(mysql_error());;
mysql_select_db(DATABASE) or die(mysql_error());