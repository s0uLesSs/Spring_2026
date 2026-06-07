<!--========================== Banner Section Start ==========================-->
<section class="banner section-bg z-index-1">
    <img src="assets/images/gradients/banner-gradient.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element-moon1.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon2.png" alt="" class="element two">

    <div class="container container-two">
        <div class="row align-items-center gy-sm-5 gy-4">
            <div class="col-lg-6">
                <div class="banner-inner position-relative pe-lg-5">
                    <div class="banner-content">
                        <h1 class="banner-content__title">Более 2млн клиентов нашей аптеки</h1>
                        <p class="banner-content__desc font-18">Изучите лучшие препараты и лекарства. Наши аптеки помогут с выбором лекарств. Найдите и купите интересующие Вас препараты либо закажите их онлайн.</p>


                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-thumb">
                    <img src="assets/images/shapes/dots.png" alt="" class="dotted-img">
                    <img src="assets/images/shapes/element2.png" alt="" class="element two end-0">

                    <div class="statistics animation bg-main text-center">
                        <h5 class="statistics__amount text-white">4000+</h5>
                        <span class="statistics__text text-white font-14">Пользователей на сайте</span>
                    </div>

                    <div class="statistics style-two bg-white text-center">
                        <h5 class="statistics__amount statistics__amount-two text-heading">4000</h5>
                        <span class="statistics__text text-heading font-14">Средних онлайн-заказов в месяц</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--========================== Banner Section End ==========================-->


<!-- =========================== Arrival Product Section Start ========================== -->
<section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
    <img src="assets/images/gradients/product-gradient.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element2.png" alt="" class="element one">

    <div class="container container-two">
        <div class="section-heading">
            <h3 class="section-heading__title">Поступления товаров</h3>
        </div>

        <div class="tab-content" id="pills-tabContent">
            
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row gy-4">
                <?php foreach($last as $l_p): ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                    
                        <div class="product-card ">
                            <div class="product-card__thumb d-flex">
                                <a href="index.php?page=all-product" class="link w-100">
                                    <img src="<?php echo $l_p['photo']; ?>" alt="" class="cover-img">
                                </a>
                                
                            </div>
                            <div class="product-card__content">
                                <h6 class="product-card__title">
                                    <a href="index.php?page=all-product" class="link"><?php echo $l_p['name_tovar']; ?></a>
                                </h6>
                                <div class="product-card__info flx-between gap-2">
                                    <div class="flx-align gap-2">
                                        <h6 class="product-card__price mb-0"><?php echo $l_p['price']; ?> &#x20bd;</h6>
                                    </div>
                                </div>
                                <div class="product-card__bottom flx-between gap-2">
                                    <span>Доставлен: 15.11.2024</span>
                                    <span>Выставлен: 15.11.2024</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                        endforeach;
                        ?>
                </div>
            </div>
            
        <div class="text-center mt-64">
            <a href="index.php?page=all-product" class="btn btn-main btn-lg pill fw-300">
                Посмотреть все товары
            </a>
        </div>

    </div>
</section>
<!-- =========================== Arrival Product Section End ========================== -->
<!-- ======================= Selling Products Start ========================= -->
<section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden">
    <img src="assets/images/gradients/selling-gradient.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element2.png" alt="" class="element one">
    <img src="assets/images/shapes/element1.png" alt="" class="element two">

    <img src="assets/images/shapes/curve-pattern1.png" alt="" class="position-absolute start-0 top-0 z-index--1">
    <img src="assets/images/shapes/curve-pattern2.png" alt="" class="position-absolute end-0 top-0 z-index--1">

    <div class="container container-two">
        <div class="section-heading style-left style-white flx-between max-w-unset gap-4">
            <div>
                <h3 class="section-heading__title">Товары недели</h3>
                <p class="section-heading__desc font-18">Каждую неделю мы стараемся подобрать наиболее популярные, лучшие надежные товары для улучшения качества выбора.</p>
            </div>
            <a href="index.php?page=all-product" class="btn btn-main btn-lg pill fw-300">
                Посмотреть все товары
            </a>
        </div>
        <div class="selling-product-slider">
            <?php
            foreach($popular as $pop):
            ?>
            <div class="product-card shadow-sm overlay-none" style="height: 450px;">
                <div class="product-card__thumb d-flex max-h-unset">
                    <a href="" class="link w-100">
                        <img src="<?php echo $pop['photo'] ?>" alt="" class="cover-img">
                    </a>
                </div>
                <div class="product-card__content">
                    <h6 class="product-card__title">
                        <a href="" class="link"><?php echo $pop['name_tovar'] ?></a>
                    </h6>
                    <div class="product-card__info flx-between gap-2">
                        <div class="flx-align gap-2">
                            <h6 class="product-card__price mb-0"><?php echo $pop['price'] ?> ₽</h6>
                            
                        </div>
                    </div>
                    <div class="product-card__bottom flx-between gap-2">
                        <div>
                            <span class="product-card__sales font-16 mb-2">1230 Sales</span>
                            <ul class="star-rating gap-2">
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>

        </div>
    </div>
</section>
<!-- ======================= Selling Products End ========================= -->
<!-- ======================= Top performance Author Start =============================== -->
<section class="top-performance overflow-hidden padding-y-120 position-relative z-index-1">
    <img src="assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1">
    <img src="assets/images/shapes/pattern-curve-four.png" alt="" class="position-absolute top-0 start-0 z-index--1">

    <img src="assets/images/shapes/element2.png" alt="" class="element two">

    <div class="container container-two">
        <div class="row gy-4 align-items-center flex-wrap-reverse">
            <div class="col-lg-7 pe-lg-5">
                <div class="position-relative">
                    <div class="circle style-two">
                        <div class="circle__badge">
                            <img src="assets/images/icons/featured-badge.png" alt="">
                        </div>
                        <div class="circle__desc circle__text">
                            <p>
                                Преимущества
                            </p>
                        </div>
                    </div>
                    <div class="performance-content">
                        <div class="performance-content__item">
                            <span class="performance-content__text font-18">Более</span>
                            <h4 class="performance-content__count">60,000 человек</h4>
                            <span class="performance-content__text font-18">радуются нашим ценам</span>
                        </div>
                        <div class="performance-content__item">
                            <span class="performance-content__text font-18"> Всего товаров</span>
                            <h4 class="performance-content__count">30,000+</h4>
                        </div>
                        <div class="performance-content__item">
                            <span class="performance-content__text font-18"> Всего заказов</span>
                            <h4 class="performance-content__count">25000+</h4>
                        </div>
                        <div class="performance-content__item">
                            <span class="performance-content__text font-18"> Гостей на сайте</span>
                            <h4 class="performance-content__count">4000+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-content">
                    <div class="section-heading style-left">
                        <h3 class="section-heading__title">Преимущества</h3>
                        <p class="section-heading__desc font-18 w-sm">Каждый месяц мы выбираем лучшие для Вас товары, а также стараемся получить на прилавки самые новые препараты.</p>
                    </div>
                    <a href="index.php?page=register" class="btn btn-main btn-lg pill fw-300"> Присоединиться к нам </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Top performance Author End =============================== -->
<!-- ======================= Become seller section start ==================== -->
<section class="seller padding-y-120">
    <div class="container container-two">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="support position-relative z-index-1">
                    <img src="assets/images/shapes/spider-net-sm.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1">
                    <img src="assets/images/shapes/arrow-shape.png" alt="" class="arrow-shape">
                    <div class="row align-items-center">
                        <div class="col-lg-1 d-lg-block d-none"></div>
                        <div class="col-lg-3 col-md-4 d-md-block d-none">
                            
                        </div>
                        <div class="col-lg-3 d-lg-block d-none"></div>
                        <div class="col-lg-5 col-md-8">
                            <div class="support-content">
                                <h3 class="support-content__title mb-3">Поддержка 24/7</h3>
                                <p class="support-content__desc">Есть вопрос? Задай его нам</p>
                                <a href="mailto:infomail@office.com" class="btn btn-black btn-lg fw-300 pill">infomail@office.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Become seller section End ==================== -->