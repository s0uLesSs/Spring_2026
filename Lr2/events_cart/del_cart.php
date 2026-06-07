<?php
session_start();

if (!isset($_GET['id_tovar'])) {
    die('ID товара не указан');
}

$id_remove = $_GET['id_tovar']; // Получаем ID товара для удаления

// Проверяем, есть ли товар в корзине
if (isset($_SESSION['cart'][$id_remove])) {
    
        unset($_SESSION['cart'][$id_remove]);
    
} else {
    echo "Товар с ID $id_remove отсутствует в корзине.";
}

// Отладочный вывод корзины для проверки (можно закомментировать)
echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";

// Перенаправляем на предыдущую страницу или fallback-страницу
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>
