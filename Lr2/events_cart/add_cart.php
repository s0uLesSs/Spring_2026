<?php
session_start();

$id_add=$_GET['id_tovar'];

// echo $id_tovar;

if (!isset($_SESSION['cart'][$id_add])) {
    $_SESSION['cart'][$id_add]=1;
}else{
    $_SESSION['cart'][$id_add]+=1; //если уже есть такой id, то добавляем +1 в количество
}

print_r($_SESSION['cart']);

$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>