<?php
$cpage = $_GET['page'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Digital Market Place HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon-two.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/sort.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <!--==================== Preloader Start ====================-->
   <!--  <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->


    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo">
                <img src="assets/images/logo/logo.png" alt="Logo">
            </a>
            <div class="mobile-menu__menu">

                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item has-submenu">
                        <a href="index.html" class="nav-menu__link">Главная</a>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Товары</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="index.php?page=all-product" class="nav-submenu__link"> Все товары</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="index.php?page=product-details" class="nav-submenu__link"> Детали товаров</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Страницы</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="index.php?page=profile" class="nav-submenu__link"> Профиль</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart.html" class="nav-submenu__link"> Корзина</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-personal.html" class="nav-submenu__link"> Почтовый адрес</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-payment.html" class="nav-submenu__link"> Способ оплаты</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-thank-you.html" class="nav-submenu__link"> Просмотр заказа</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link">Контакты</a>
                    </li>
                </ul>
                <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">

                    <a href="register.html" class="btn btn-main pill">
                        <span class="icon-left icon">
                            <img src="assets/images/icons/user.svg" alt="">
                        </span>Создать аккаунт
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <main class="change-gradient">
        <!-- ==================== Header Start Here ==================== -->
        <header class="header">
            <div class="container container-full">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.php" class="link">
                            <img src="assets/images/logo/logo-two.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">

                        <ul class="nav-menu flx-align ">
                            <li class=" <?php if (!isset($cpage)) {
                                echo "activePage";
                              } ?>">
                                <a href="index.php" class="nav-menu__link">Главная</a>
                            </li>
                            <li class="nav-menu__item <?php if ($cpage == 'all-product') {
                                echo "activePage";
                              } ?>">
                                <a href="index.php?page=all-product" class="nav-menu__link">Лекарства</a>

                            </li>
                            <li class="nav-menu__item <?php if ($cpage == 'contact') {
                                echo "activePage";
                              } ?>">
                                <a href="index.php?page=contact" class="nav-menu__link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">
                        <a href="index.php?page=cart" class="header-right__button cart-btn position-relative">
                            <img src="assets/images/icons/cart.svg" alt="">
                            
                        </a>
                        <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">

                            <a href="index.php?page=registration" class="btn btn-main pill">
                                <span class="icon-left icon">
                                    <img src="assets/images/icons/user.svg" alt="">
                                </span>Аккаунт
                            </a>

                        </div>
                        <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->