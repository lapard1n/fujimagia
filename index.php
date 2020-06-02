<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магия Фудзи</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="fonts/Fontawesome/css/all.css">
    <link rel="shortcut icon" href="img/logo_sushi.svg" type="image/x-icon">
</head>
<body>
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
    <main class="main">
        <!-- MAIN DISCOUNT SLIDER -->
        <section class="slider">
            <div class="slide"></div>
            <div class="title">
                <button class="slider__arrow slider__arrow_left">
                    <i class="fas fa-angle-left"></i>
                </button>
                <h1 class="title__sub">Суши с Фудзи</h1>
                <h1 class="title__sup">И в этом наша магия</h1>
                <button class="slider__arrow slider__arrow_right">
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </section>
        <!-- MAIN FOOD CARDS -->
        <article class="food" id="categories">
            <!-- FOOD CARDS LINKS -->
            <section class="links">
                <div class="links__btns">
                    <div class="links__img">
                        <img src="img/main/links_logo.svg">
                    </div>
                    <div class="btn-case">
                        <button class="btn hover-line" id="category__all">
                            Все
                        </button>
                    </div>
                    <div class="btn-case">
                        <button class="btn hover-line" id="category__classic">
                            Классические роллы
                        </button>
                    </div>
                    <div class="btn-case">
                        <button class="btn hover-line" id="category__baked">
                            Запеченые роллы
                        </button>
                    </div>
                    <div class="btn-case">
                        <button class="btn hover-line" id="category__mini">
                            Мини роллы
                        </button>
                    </div>
                </div>
            </section>
            <!-- FOOD CARDS -->
            <section class="card-case" id="shopWindow"></section>
        </article>
    </main>
    <footer class="footer">
        <div class="footer-case">
            <!-- FOOTER CONTACTS -->
            <div class="footer__contacts-case">
                <div class="footer__contacts_title">
                    <i class="fas fa-map-marker-alt"></i>
                    <h1 class="footer__h1">Контакты:</h1>
                </div>
                <a class="footer__links hover-line" href="tel:+77832742913">+7 (783) 274 2913</a>
                <a class="footer__links hover-line"href="mailto:fujimagia@office.io">fujimagia@office.io</a>
            </div>
            <!-- FOOTER NETWORKS -->
            <div class="footer__soc">
                <h1 class="footer__h1">Будьте с нами!</h1>
                <div class="footer__net">
                    <a class="footer_item" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="footer_item" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="footer_item" href="#">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a class="footer_item" href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <!-- FOOTER APPS -->
            <div class="footer__app">
                <div class="footer__app-title">
                    <h1 class="footer__h1">Play Market</h1>
                    <a class="footer_download" href="#">
                        <i class="fab fa-google-play"></i>
                    </a>
                </div>
                <div class="footer__app-title">
                    <h1 class="footer__h1">App Store</h1>
                    <a class="footer_download" href="#">
                        <i class="fab fa-apple"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="/scripts/Shop.js"></script>
    <script src="/scripts/Basket.js"></script>
    <script src="/scripts/Good.js"></script>
    <script src="/scripts/app.js"></script>
</body>
</html>