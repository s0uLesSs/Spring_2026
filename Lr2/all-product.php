<!-- ======================== Breadcrumb one Section Start ===================== -->
<section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

    <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon1.png" alt="" class="element three">

</section>
<!-- ======================== Breadcrumb one Section End ===================== -->
<!-- ======================== All Product Section Start ====================== -->
<section class="all-product padding-y-120">
    <div class="container container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-tab gap-3 flx-between">

                    <button type="button" class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                        <span class="icon icon-left"><img src="assets/images/icons/filter.svg" alt=""></span>
                        <span class="font-18 fw-500">Фильтры</span>
                    </button>

                    <div class="my-sort">
                        <select onchange="location=this.value">
                            <option value="index.php?page=sort&id_sort=2<?php echo isset($_SESSION['id_filtr']) ? '&id_vid=' . $_SESSION['id_filtr'] : ''; ?>">
                                Название от А до Я
                            </option>
                            <option value="index.php?page=sort&id_sort=3<?php echo isset($_SESSION['id_filtr']) ? '&id_vid=' . $_SESSION['id_filtr'] : ''; ?>">
                                Название от Я до А
                            </option>
                            <option value="index.php?page=sort&id_sort=4<?php echo isset($_SESSION['id_filtr']) ? '&id_vid=' . $_SESSION['id_filtr'] : ''; ?>">
                                Цена по возрастанию
                            </option>
                            <option value="index.php?page=sort&id_sort=5<?php echo isset($_SESSION['id_filtr']) ? '&id_vid=' . $_SESSION['id_filtr'] : ''; ?>">
                                Цена по убыванию
                            </option>
                        </select>
                    </div>


                    <div class="list-grid d-flex align-items-center gap-2">

                        <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i class="las la-border-all"></i></button>
                        <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i class="las la-bars"></i></button>
                    </div>
                </div>
                <form action="#" class="filter-form pb-4 ">
                    <div class="row gy-3">
                        <div class="col-sm-4 col-xs-6">
                            <div class="flx-around">
                                <label for="tag" class="form-label font-16">Название</label>
                                <button type="reset" class="text-body font-14">Очистить</button>
                            </div>
                            <div class="position-relative">
                                <input type="text" style="width: 310%;" class="common-input border-gray-five common-input--withLeftIcon" id="tag" placeholder="Поиск по названию...">
                                <span class="input-icon input-icon--left"><img src="assets/images/icons/search-two.svg" alt=""></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-lg-4">
                <!-- ===================== Filter Sidebar Start ============================= -->
                <div class="filter-sidebar">
                    <button type="button" class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i class="las la-times"></i></button>
                    <div class="filter-sidebar__item">
                        <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">Вид лекарства: </button>
                        <div class="filter-sidebar__content">
                            <ul class="filter-sidebar-list">
                                <?php foreach ($sql_vid as $vid): ?>
                                    <li class="filter-sidebar-list__item">
                                        <a href="index.php?page=filtr&id_vid=<?php echo $vid['id_vidTovar']; ?>" class="filter-sidebar-list__text">
                                            <?php echo $vid['name_vid']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>

                                <form action="index.php?page=all-product" method="post">
                                    <?php unset($_SESSION['sql_zap_tovar']); ?>
                                    <button type="submit" class=" btn-outline-light btn-sm pill">
                                        Сбросить фильтры и сортировку
                                    </button>
                                </form>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===================== Filter Sidebar End ============================= -->
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <?php
                            foreach ($sql_tovar as $tovar):
                            ?>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="<?php echo $tovar['photo'] ?>" alt="" class="cover-img">
                                            </a>

                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link"><?php echo $tovar['name_tovar'] ?></a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
                                                <span class="product-card__author">

                                                </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0"><?php echo $tovar['price'] ?> ₽</h6>

                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">

                                                <a href="events_cart/add_cart.php?id_tovar=<?php echo $tovar['id_tovar']?>" class="btn btn-outline-light btn-sm pill">В корзину</a>
                                                <a href="index.php?page=product-details&id_tovar=<?php echo $tovar['id_tovar']?>" class="btn btn-outline-light btn-sm pill">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>



                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== All Product Section End ====================== -->