<!-- Добавление заказа -->
<?php
session_start();
unset($_SESSION['message_order']);
require('../db.php');



if (isset($_SESSION['user'])) {

    $add_order=$_SESSION['cart'];
//Превращаем id_user из строки в число
if (!is_array($add_order) || empty($add_order)) {
    $_SESSION['message_order'] = 'Корзина пуста';
    header("Location: ../index.php?page=cart");
    exit();
}     
$id_user=(int)$_SESSION['user']['id_user'];

foreach ($add_order as $key => $value) {
    $id_tovar=$key;
    $kol_tovar=$value;
    mysqli_query($link, "INSERT INTO `orders`(`id_tovar`, `kol_tovar`, `id_user`) VALUES ('$id_tovar','$kol_tovar','$id_user')");
    unset($_SESSION['cart']);
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['role']==0) {
            header("Location: ../index.php?page=user");
        } else {
            header("Location: ../index.php?page=admin");
        }
    }
}
    


} else {
    $_SESSION['message_order']='Для оформления заказа нужно войти в аккаунт';
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']:'redirect-form.html';
    header("Location: $redirect");
    exit();
}

?>