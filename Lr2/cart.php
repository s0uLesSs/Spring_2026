<!-- ======================== Breadcrumb Four Section Start ===================== -->
<section class="breadcrumb breadcrumb-four padding-static-y-60 section-bg position-relative z-index-1 overflow-hidden">

    <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon1.png" alt="" class="element three">

    <div class="container container-two">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb-four-content">
                    <h3 class="breadcrumb-four-content__title text-center mb-3 text-capitalize">Корзина</h3>
                    <ul class="breadcrumb-list flx-align justify-content-center gap-2 mb-2">
                        <li class="breadcrumb-list__item font-14 text-body">
                            <a href="index.php" class="breadcrumb-list__link text-body hover-text-main">Главная</a>
                        </li>
                        <li class="breadcrumb-list__item font-14 text-body">
                            <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                        </li>
                        <li class="breadcrumb-list__item font-14 text-body">
                            <span class="breadcrumb-list__text">Моя корзина</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== Breadcrumb Four Section End ===================== -->
<!-- ======================= Cart Section Start ======================== -->
<div class="cart padding-y-120">
    <div class="container">
        <div class="cart-content">
            <div class="table-responsive">
                <table class="table style-two">
                    <thead>

                        <tr>
                            <th>Лекарство</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th>Итого</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            //Все продукты из БД
                            $sql_tovar_m=$link->query("SELECT * FROM `tovari` LEFT JOIN `vidTovar` ON tovari.vidTovar = vidTovar.id_vidTovar");
                            //Забираем продукты из корзины
                            $add_cart=$_SESSION['cart'];
                            if (!isset($add_cart)) {
                                echo '<span style="font-weight: bold;color: #000; font-size: 24px;">Корзина пуста!</span>';
                            } else
                                foreach ($add_cart as $key => $value):
                                    $a=$key;
                                    $kol=$value;
                                    foreach ($sql_tovar_m as $product_m) {
                                        if ($product_m['id_tovar']==$a) {
                                            $cart_prod=$product_m;
                                            break;
                                        }
                                    }
                            ?>
                        <tr>
                            <td>
                                <div class="cart-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="cart-item__thumb">
                                            <a href="product-details.html" class="link">
                                                <img src="<?php echo $cart_prod['photo']; ?>" alt="" class="cover-img">
                                            </a>
                                        </div>
                                        <div class="cart-item__content">
                                            <h6 class="cart-item__title font-heading fw-700 text-capitalize font-18 mb-4"> <a href="product-details.html" class="link"><?php echo $cart_prod['name_tovar']; ?></a></h6>
                                            <span class="cart-item__price font-18 text-heading fw-500">Вид лекарства: <span class="text-body font-14"><?php echo $cart_prod['name_vid']; ?></span></span>
                                        </div>
                                    </div>
                                    <div class="flx-align gap-4 mt-3 mt-lg-4">
                                        
                                    <a href="events_cart/del_cart.php?id_tovar=<?php echo $cart_prod['id_tovar']?>" class="btn btn-outline-light btn-sm pill"><span style="color:red">Удалить</span></a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cart-item__count">
                                    <button data-decrease="data-decrease"> <i class="fas fa-minus"></i></button>
                                    <input data-value="data-value" type="number" value="<?php echo $kol ?>">
                                    <button data-increase="data-increase"><i class="fas fa-plus"></i></button>
                                </div>
                            </td>
                            <td>
                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $cart_prod['price']; ?></span>
                            </td>
                            <td>
                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo ($kol*$cart_prod['price']);?></span>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="cart-content__bottom flx-between gap-2">
                <a href="index.php?page=all-product" class="btn btn-outline-light flx-align gap-2 pill btn-lg">
                    <span class="icon line-height-1 font-20"><i class="las la-arrow-left"></i></span>
                    Продолжить покупки
                </a>
                <?php echo $_SESSION['message_order']; unset($_SESSION['message_order']); ?>
                <a href="events_order/add_order.php" class="btn btn-main flx-align gap-2 pill btn-lg">
                    Оформить заказ
                    <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Cart Section End ======================== -->