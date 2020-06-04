<header class="header">
    <!-- HEADER MENU -->
    <nav class="nav">
        <!-- HEADER MENU INFO -->
        <div class="nav__info">
            <div class="nav__contacts">
                <div class="nav__place">
                    <i class="fas fa-map-marker-alt"></i>
                    <h2>Санкт-Петербург</h2>
                </div>
                <a class="nav__links hover-line" href="tel:+78005553535">+7 (800) 555 3535</a>
            </div>
            <a class="nav__links hover-line" href="about-us.php">
                <i class="fas fa-pencil-alt"></i>
                О нас
            </a>
        </div>
        <!-- HEADER MENU LOGO -->
        <a href="index.php" class="nav__logo">
            <img src="img/header/header_sushi.svg">
            <div class="nav__logo_text">
                <span>Магия</span>
                <span>Фудзи</span>
            </div>
        </a>
        <!-- HEADER MENU ACCOUNT -->
        <div class="nav__acc">
            <div class="nav__login">
                <a class="nav__links hover-line" href="login.php">
                    <i class="fas fa-key"></i>
                    Вход
                </a>
                <a class="nav__links hover-line" href="registration.php">
                    <i class="fas fa-lock"></i>
                    Регистрация
                </a>
            </div>
            <a class="nav__account nav__account_disable nav__links hover-line" href="account.php">
                <i class="fas fa-user"></i>
                Ваш кабинет
            </a>
            <a class="nav__cart" href="#" id="cartButton">
                <i class="fas fa-shopping-basket"></i>
                <span class="nav__sum" id="cart__total-count">0</span>
            </a>
        </div>
    </nav>
    <!-- CART FORM -->
    <section class="cart cart__disable" id="cartWindow">
        <div class="cart__row">
            <div class="cart__product">Ваш заказ</div>
            <div class="cart__quantity">Кол-во</div>
            <div class="cart__sum">Цена</div>
            <div class="cart__cancel"><div class="dat"></div></div>
        </div>
        <div class="order">
            <div class="order__clean order__clean__disable">
                <div class="order__background"></div>
                <div class="order__title">
                    <h1 class="order__title_sub">Пока что</h1>
                    <h1 class="order__title_sup">Ваша корзина пуста</h1>
                </div>
            </div>
            <div id="fullCart">

            </div>
        </div>
        <div class="cart__price" id="cartTotal">
            <div class="cart__price_sum">
                Счет: <span id="commonPrice">0 Р<i class="fas fa-tags"></i></span>
            </div>
            <a class="cart__price_btn" type="button" href="purchase.php">Оформить</a>
        </div>
    </section>
</header>