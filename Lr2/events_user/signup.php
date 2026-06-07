<?php
// Старт сессии
session_start();
// Подключение файла с БД
require('../db.php');
// Удаляем сообщение, если оно есть
unset($_SESSION['message']);
// Записываю в переменные информацию, указаную пользователем в форме, с помощью метода POST, паралелльно удаляя пробелы
$FIO = trim($_POST['FIO']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password2 = trim($_POST['password2']);

// Проверка на пустые поля
if (empty($FIO) || empty($email) || empty($password) || empty($password2)) {
    // Если поля пустые, то пользователю выводится сообщение
    $_SESSION['message'] = 'Пожалуйста, заполните все поля.';
    // Редирект, чтобы остаться на этой же странице
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
    header("Location: $redirect");
    exit();
}

//Проверяем, есть ли в БД пользователь с таким логином. С помощью запроса по сравнению почты
$sql_user = $link->query("SELECT * FROM `users` WHERE `email`='$email'");
// Если выводятся строчки при выполнении запроса, то вывожу сообщение об ошибке и делаю редирект
if (mysqli_num_rows($sql_user) > 0) {
    $_SESSION['message'] = 'Пользователь с таким Email уже зарегестрирован!';
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
    header("Location: $redirect");
    exit();
} else {
    // Если такого пользователя нет, то делаю проверку на схожесть паролей.
    if ($password === $password2) {
        //Хеширование пароля, если пароли совпадают
        $password_hash = md5($password);
        // Делаю запрос в БД на добавление пользователя
        mysqli_query($link, "INSERT INTO `users`(`FIO`, `email`, `password`) VALUES ('$FIO','$email','$password_hash')");
        // Вывожу сообщение и делаю редирект
        $_SESSION['message_suc'] = 'Регистрация прошла успешно!';
        header("Location: ../index.php?page=login");
    } else {
        // Если пароли не совпадают, то вывожу сообщение об ошибке и делаю редирект
        $_SESSION['message'] = 'Пароли не совпадают, пройдите регистрацию заново';
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
        header("Location: $redirect");
        exit();
    }
}
