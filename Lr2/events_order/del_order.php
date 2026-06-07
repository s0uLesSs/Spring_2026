<?php
session_start();
require('../db.php');

$id_user = (int)$_SESSION['user']['id_user']; // Получаем ID пользователя из сессии
$id_tovar = isset($_GET['id_tovar']) ? (int)$_GET['id_tovar'] : null; // Получаем ID товара из GET

if ($id_tovar === null) {
    $_SESSION['message_order'] = 'ID товара не указан';
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
    header("Location: $redirect");
    exit();
}

// Удаляем товар из таблицы orders для текущего пользователя
$query = "DELETE FROM `orders` WHERE `id_user` = '$id_user' AND `id_tovar` = '$id_tovar'";
$result = mysqli_query($link, $query);

if ($result) {
    $_SESSION['message_order'] = 'Товар успешно удален из ваших заказов';
} else {
    $_SESSION['message_order'] = 'Ошибка при удалении товара из заказа';
}

// Перенаправление обратно на предыдущую страницу
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>
