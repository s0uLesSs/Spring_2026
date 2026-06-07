<!-- ================================== Account Page Start =========================== -->
<section class="account d-flex">
    <div class="account__left d-md-flex d-none flx-align section-bg position-relative z-index-1 overflow-hidden">
        <img src="assets/images/shapes/pattern-curve-seven.png" alt="" class="position-absolute end-0 top-0 z-index--1 h-100">
        <div class="account-thumb">
            <img src="assets/images/login.jpg" alt="">
            
        </div>
    </div>
    <div class="account__right padding-y-120 flx-align">
        <div class="account-content">
            <a href="index.html" class="logo mb-64">  
                <img src="assets/images/logo/logo.png" alt="">
            </a>
            <h4 class="account-content__title mb-48 text-capitalize">Добро пожаловать!</h4>
            <span style="color:red; margin-bottom:30px"><?php echo $_SESSION['message_suc']; echo $_SESSION['message']; unset($_SESSION['message_suc']); unset($_SESSION['message']);?></span>
            <form action="events_user/signin.php" method="post">
                <div class="row gy-4">
                    <div class="col-12">
                        <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Email</label>
                        <div class="position-relative">
                            <input type="email" class="common-input common-input--bg common-input--withIcon" id="email" name="email" placeholder="Введите email">
                            <span class="input-icon"><img src="assets/images/icons/envelope-icon.svg" alt=""></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="your-password" class="form-label mb-2 font-18 font-heading fw-600">Пароль</label>
                        <div class="position-relative">
                            <input type="password" class="common-input common-input--bg common-input--withIcon" id="password" name="password" placeholder="Введите пароль">
                            <span class="input-icon toggle-password cursor-pointer" id="#your-password"><img src="assets/images/icons/lock-icon.svg" alt=""></span>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-main btn-lg w-100 pill">Войти</button>
                    </div>
                    
                    <div class="col-sm-12 mb-0">
                        <div class="have-account">
                            <p class="text font-14">Впервые у нас? <a class="link text-main text-decoration-underline fw-500" href="index.php?page=registration">Зарегестрироваться</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ================================== Account Page End =========================== -->