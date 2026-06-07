<!-- ======================== Breadcrumb Three Section Start ===================== -->
<section class="breadcrumb-three section-bg position-relative z-index-1 overflow-hidden">

    <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon1.png" alt="" class="element three">

    <div class="container container-two">
        <div class="breadcrumb-three-content border-bottom border-color">
            <div class="breadcrumb-three-content__inner">
                <div class="breadcrumb-three-content__left">
                    <div class="flx-between align-items-end gap-3">
                        <div class="author-profile d-flex gap-2 flex-column">
                            <div class="author-profile__thumb flex-shrink-0">
                                <img src="assets/images/icons/user.png" alt="">
                            </div>
                            <div class="author-profile__info">
                                <h5 class="author-profile__name mb-2"><?php echo $_SESSION['user']['FIO']; ?></h5>
                                <span class="author-profile__membership font-14">Вы пользователь!</span>
                                <p style="color:red; margin-top:20px"><?php echo $_SESSION['message_order']; unset($_SESSION['message_order']); ?></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <ul class="nav tab-bordered nav-pills mt-4" id="pills-tabbs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Профиль</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-followerss-tab" data-bs-toggle="pill" data-bs-target="#pills-followerss" type="button" role="tab" aria-controls="pills-followerss" aria-selected="false">Заказы</button>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ======================== Breadcrumb Three Section End ===================== -->

<!-- ===================== Profile Section Start ============================== -->
<section class="profile pt-5 padding-b-120">
    <div class="container container-two">
        <div class="tab-content" id="pills-tabb">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <!-- Tab Content End -->
                <div class="profile-wrapper">
                    <div class="profile-content">
                        <div class="profile-content__inner">
                            <div class="profile-content__item-wrapper">
                                <div class="profile-content__item">
                                    <h5 class="profile-content__title mb-2">ФИО</h5>
                                    <p style="color: blue;" class="profile-content__desc"><?php echo $_SESSION['user']['FIO']; ?></p>
                                </div>
                                <div class="profile-content__item">
                                    <h5 class="profile-content__title mb-2">Email</h5>
                                    <p style="color: blue;" class="profile-content__desc"><?php echo $_SESSION['user']['email']; ?></p>
                                </div>
                                <div class="profile-content__item">
                                    <h5 class="profile-content__title mb-2">Роль</h5>
                                    <p class="profile-content__desc">Вы — <span style="color: blue;">пользователь!</span></p>
                                </div>
                                <form action="events_user/logout.php" method="post">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-main btn-md w-100">Выйти из аккаунта</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ========================== Profile Sidebar Start =========================== -->
                    <div class="profile-sidebar">
                        <div class="profile-sidebar__item">
                            <h5 class="profile-sidebar__title">Помощь</h5>
                            <form action="#">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <label for="emailsId" class="form-label mb-2 font-18 fw-500">Email</label>
                                        <input type="email" class="common-input radius-8 common-input--md" id="emailsId" placeholder="Введите email, если он отличается от вашего логина">
                                    </div>
                                    <div class="col-12">
                                        <label for="messagesId" class="form-label mb-2 font-18 fw-500">Сообщение</label>
                                        <textarea class="common-input radius-8" id="messagesId" placeholder="Укажите проблему"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-main btn-md w-100">Отправить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ========================== Profile Sidebar End =========================== -->
                    <div class="profile-sidebar__item">
                        <h5 class="profile-sidebar__title">Social Profile</h5>
                        <ul class="social-list">
                            <li class="social-list__item">
                                <a href="https://www.facebook.com" class="social-list__link flx-center bg-white border-white text-heading font-18"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.twitter.com" class="social-list__link flx-center bg-white border-white text-heading font-18"> <i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.linkedin.com" class="social-list__link flx-center bg-white border-white text-heading font-18"> <i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.pinterest.com" class="social-list__link flx-center bg-white border-white text-heading font-18"> <i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.youtube.com" class="social-list__link flx-center bg-white border-white text-heading font-18"> <i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ========================== Profile Sidebar End =========================== -->
            </div>
            <!-- Заказы -->
            <div class="tab-pane fade" id="pills-followerss" role="tabpanel" aria-labelledby="pills-followerss-tab">
                <div class="profile-wrapper">
                    <!-- Здесь контент заказов -->
                    
                    <div class="table-responsive" style="width: 150%;">
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
                            $id=$_SESSION['user']['id_user'];
                            //Все продукты из БД
                            $sql_order=$link->query("SELECT * FROM `orders` WHERE `id_user` =$id");
                            if (!isset($sql_order)) {
                                echo '<span style="font-weight: bold;color: #000; font-size: 24px;">Вы не оформили ни одного заказа</span>';
                            } else
                                foreach ($sql_order as $order):
                            $id_tov=$order['id_tovar'];
                            $sql_name_tovar=$link->query("SELECT * FROM `tovari` LEFT JOIN `vidTovar` ON tovari.vidTovar = vidTovar.id_vidTovar WHERE `id_tovar`=$id_tov");
                                foreach ($sql_name_tovar as $tovar):
                    ?>
                        <tr>
                            <td>
                                <div class="cart-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="cart-item__thumb">
                                            <a href="product-details.html" class="link">
                                                <img src="<?php echo $tovar['photo']; ?>" alt="" class="cover-img">
                                            </a>
                                        </div>
                                        <div class="cart-item__content">
                                            <h6 class="cart-item__title font-heading fw-700 text-capitalize font-18 mb-4"> <a href="product-details.html" class="link"><?php echo $tovar['name_tovar']; ?></a></h6>
                                            <span class="cart-item__price font-18 text-heading fw-500">Вид лекарства: <span class="text-body font-14"><?php echo $tovar['name_vid']; ?></span></span>
                                        </div>
                                    </div>
                                    <div class="flx-align gap-4 mt-3 mt-lg-4">
                                        
                                    <a href="events_order/del_order.php?id_tovar=<?php echo $tovar['id_tovar']?>" class="btn btn-outline-light btn-sm pill"><span style="color:red">Удалить</span></a>
                                    </div>
                                </div>
                            </td>
                            <td>    
                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $order['kol_tovar']; ?></span>
                            </td>
                            <td>
                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $tovar['price']; ?></span>
                            </td>
                            <td>
                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo ($order['kol_tovar']*$tovar['price']);?></span>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        endforeach;
                        ?>
                    </tbody>
                    
                </table>
            </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
