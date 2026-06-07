<?php
// Старт сессии
session_start();
// Удаление сессии пользователя
unset($_SESSION['user']);
// Удаление всех сообщений
unset($_SESSION['message']);
unset($_SESSION['message_suc']);
unset($_SESSION['message_record']);
// Перенаправление на страницу авторизации
header("Location: ../index.php?page=login");
echo "ВЫХОД";
