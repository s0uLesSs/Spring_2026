<?php
// Подключение к БД
$host = 'localhost';
$user='root';
$password='';
$db_name='apteka'; 
//Соединение с БД
$link=mysqli_connect($host,$user,$password,$db_name);

$link->set_charset('utf8');





?>