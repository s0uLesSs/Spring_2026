<?php
// Старт сессии
session_start();
// Подключение файла с БД
require('../db.php');
// Удаляем сообщение, если оно есть
unset($_SESSION['message']);
unset($_SESSION['message_suc']);
// Записываю в переменные информацию, указаную пользователем в форме, с помощью метода POST, паралелльно удаляя пробелы
$email = $_POST['email'];
$password = $_POST['password'];
// Хэширую, указанный пользователем пароль, чтобы сравнить его с паролем в БД
$password_hash = md5($password);

//Проверка, есть ли пользователь с таким логином и паролем в БД
$sql_user = $link->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password_hash'");
// Если запрос ничего не вывел, то выдю сообщение об ошибке и делаю редирект
if (mysqli_num_rows($sql_user) == 0) {
    $_SESSION['message'] = 'Неверный логин или пароль!';
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
    header("Location: $redirect");
    exit();
    // Если запрос нашел пользователя, то
} else {
    //Забираю данные пользователя в виде ассоциативного массива
    $user = mysqli_fetch_assoc($sql_user);
    // Записываю в сессию user данные соответствующие нужным полям
    $_SESSION['user'] = ["id_user" => $user['id_user'], "FIO" => $user['FIO'], "email" => $user['email'], "password" => $user['password'], "role" => $user['role']];
    // Делаю проверку на роль, если она равна 0, то отправляю его в кабинет пользователя, иначе в кабинет админа
    if ($_SESSION['user']['role'] == 0) {
        header("Location: ../index.php?page=user");
    } else {
        header("Location: ../index.php?page=admin");
    }
}
