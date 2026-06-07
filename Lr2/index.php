<?php
session_start();
require('header.php');
require('db.php');
$page = $_GET['page'];

$sql_vid = $link->query("SELECT * FROM `vidTovar`");
$last = $link->query("SELECT * FROM `tovari` WHERE `name_tovar` = 'Анаферон таблетки 20шт' OR `name_tovar`='Нимесил' OR `name_tovar` = 'Сумамед таблетки 3шт' OR `name_tovar`='Мелоксикам таблетки 20 шт.';");
$popular = $link->query("SELECT * FROM `tovari` WHERE `name_tovar` = 'Мелоксикам таблетки 20 шт.' OR `name_tovar`='Ибупрофен таблетки 50 шт.' OR `name_tovar` = 'Нурофен' OR `name_tovar` = 'Рафамин таблетки 20шт'");
$sql_single = $link->query("SELECT * FROM `tovari` LEFT JOIN `typeTovar` ON tovari.typeTovar=typeTovar.id_typeTovar LEFT JOIN `vidTovar` ON tovari.vidTovar=vidTovar.id_vidTovar");

if (!isset($_SESSION['sql_zap_tovar'])) {
	$_SESSION['sql_zap_tovar'] = "SELECT * FROM `tovari` LEFT JOIN `vidTovar` ON tovari.vidTovar=vidTovar.id_vidTovar";
}
$sql_text = $_SESSION['sql_zap_tovar'];
$sql_tovar = $link->query($sql_text);

if (!isset($page) or $page == 'content') {
	require('content.php');
} elseif ($page == 'product-details') {
	$id_tovar=$_GET['id_tovar'];
	foreach($sql_single as $tovar_sin){
        if($tovar_sin['id_tovar']==$id_tovar){
            $tovar_id=$tovar_sin;
        }
    }
	require('product-details.php');
} elseif ($page == 'all-product') {
	require('all-product.php');
} elseif ($page == 'contact') {
	require('contact.php');
} elseif ($page == 'user') {
	require('profile_user.php');
}elseif ($page == 'admin') {
	require('profile_admin.php');
}elseif ($page == 'registration') {
	// Проверка на существование сессии пользователя
	if (isset($_SESSION['user'])) {
		// По условию в зависимости от роли пользователя выполняется вход на нужную страницу
		if ($_SESSION['user']['role'] == 0) {
		  require('profile_user.php');
		} else {
		  require('profile_admin.php');
		}
		// Если сессии с пользователем нет, то переход на страницу авторизации
	  } else {
		require('register.php');
	  }
	
} elseif ($page == 'login') {
	require('login.php');
} elseif ($page == 'cart') {
	require('cart.php');
} elseif ($page == 'filtr') {
	// Получаем ID фильтра
	$id_filtr = $_GET['id_vid'];

	// Сохраняем ID фильтра в сессии
	$_SESSION['id_filtr'] = $id_filtr;

	// Формируем SQL-запрос для фильтрации
	$_SESSION['sql_zap_tovar'] = "SELECT * FROM `tovari` 
                                  LEFT JOIN `vidTovar` ON tovari.vidTovar = vidTovar.id_vidTovar 
                                  WHERE tovari.vidTovar = '$id_filtr'";

	// Выполняем запрос для отображения отфильтрованных товаров
	$sql_tovar = $link->query($_SESSION['sql_zap_tovar']);
	require('all-product.php');
} elseif ($page == 'sort') {
	// Получаем ID сортировки
	$id_sort = $_GET['id_sort'];

	// Проверяем, есть ли ID фильтра в URL или сессии
	if (isset($_GET['id_vid'])) {
		$id_filtr = $_GET['id_vid'];
		$_SESSION['id_filtr'] = $id_filtr; // Сохраняем фильтр в сессии
	} elseif (isset($_SESSION['id_filtr'])) {
		$id_filtr = $_SESSION['id_filtr']; // Используем фильтр из сессии
	} else {
		$id_filtr = null;
	}

	// Формируем базовый SQL-запрос
	if ($id_filtr) {
		$sql_text = "SELECT * FROM `tovari` 
                     LEFT JOIN `vidTovar` ON tovari.vidTovar = vidTovar.id_vidTovar 
                     WHERE tovari.vidTovar = '$id_filtr'";
	} else {
		$sql_text = "SELECT * FROM `tovari`";
	}

	// Добавляем сортировку
	switch ($id_sort) {
		case '2':
			$sql_text .= " ORDER BY `name_tovar` ASC";
			break;
		case '3':
			$sql_text .= " ORDER BY `name_tovar` DESC";
			break;
		case '4':
			$sql_text .= " ORDER BY `price` ASC";
			break;
		case '5':
			$sql_text .= " ORDER BY `price` DESC";
			break;
	}

	// Выполняем запрос
	$sql_tovar = $link->query($sql_text);
	require('all-product.php');
}

require('footer.php');
