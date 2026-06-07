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
                                <span class="author-profile__membership font-14">Вы администратор!</span>
                                <p style="color:red; margin-top:20px"><?php echo $_SESSION['message_order'];
                                                                        unset($_SESSION['message_order']); ?></p>
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
                                    <p class="profile-content__desc">Вы — <span style="color: blue;">администратор!</span></p>
                                </div>
                                <form action="events_user/logout.php" method="post">
                                    <div class="col-12" style="width: 25%;">
                                        <button type="submit" class="btn btn-main btn-md w-100">Выйти из аккаунта</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!-- ========================== Profile Sidebar Start =========================== -->

                    <!-- ========================== Profile Sidebar End =========================== -->
                    <div class="profile-sidebar__item" style="width:500px;">
                        <h5 class="profile-sidebar__title">Social Profile</h5>
                        <ul class="social-list" style="gap: 50px;">
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
                <form action="index.php?page=admin" method="post" style="width: 50%; margin-bottom:60px">
                    <label for="filterFIO">Выберите пользователя:</label>
                    <select name="filterFIO" id="filterFIO" class="form-select" onchange="this.form.submit()">
                        <option value="">Все пользователи</option>
                        <?php
                        // Получаем всех уникальных пользователей
                        $users_query = $link->query("SELECT DISTINCT FIO FROM `users` ORDER BY FIO ASC");
                        $selectedFIO = isset($_GET['filterFIO']) ? $_GET['filterFIO'] : ''; // Сохраняем текущий выбор
                        while ($user = $users_query->fetch_assoc()) {
                            $selected = ($selectedFIO == $user['FIO']) ? 'selected' : ''; // Проверяем, был ли пользователь выбран
                            echo "<option value='{$user['FIO']}' $selected>{$user['FIO']}</option>";
                        }
                        ?>
                    </select>
                </form>

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
                                    <th>email</th>
                                    <th style="display: flex; justify-content:center;">ФИО</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
            // Получаем значение фильтра
            $filterFIO = isset($_GET['filterFIO']) && !empty($_GET['filterFIO']) ? $link->real_escape_string($_GET['filterFIO']) : null;

            // Формируем SQL-запрос с учетом фильтра
            $sql_order_query = "SELECT * FROM `orders` 
                                LEFT JOIN `users` ON orders.id_user = users.id_user";
            if ($filterFIO) {
                $sql_order_query .= " WHERE users.FIO = '$filterFIO'";
            }

            $sql_order = $link->query($sql_order_query);

            // Проверяем, есть ли заказы
            if ($sql_order && $sql_order->num_rows > 0) {
                while ($order = $sql_order->fetch_assoc()) {
                    $id_tov = $order['id_tovar'];
                    $sql_name_tovar = $link->query("SELECT * FROM `tovari` 
                                                    LEFT JOIN `vidTovar` ON tovari.vidTovar = vidTovar.id_vidTovar 
                                                    WHERE `id_tovar` = $id_tov");
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

                                                </div>
                                            </td>
                                            <td>
                                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $order['kol_tovar']; ?></span>
                                            </td>
                                            <td>
                                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $tovar['price']; ?></span>
                                            </td>
                                            <td>
                                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo ($order['kol_tovar'] * $tovar['price']); ?></span>
                                            </td>
                                            <td>
                                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $order['email']; ?></span>
                                            </td>
                                            <td>
                                                <span class="cart-item__totalPrice text-body font-18 fw-400 mb-0"><?php echo $order['FIO']; ?></span>
                                            </td>
                                        </tr>
                                        <?php
                    endforeach;
                }
            } else {
                echo "<tr><td colspan='6'>Нет заказов для выбранного пользователя.</td></tr>";
            }
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