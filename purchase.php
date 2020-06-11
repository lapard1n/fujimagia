<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Оформление заказа</title>
    <link rel="stylesheet" type="text/css" href="css/purchase.css">
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
            <a class="nav__links hover-line" href="about-us.html">
                <i class="fas fa-pencil-alt"></i>
                О нас
            </a>
        </div>
        <!-- HEADER MENU LOGO -->
        <a href="index.html" class="nav__logo">
            <img src="img/header/header_sushi.svg">
            <div class="nav__logo_text">
                <span>Магия</span>
                <span>Фудзи</span>
            </div>
        </a>
        <!-- HEADER MENU ACCOUNT -->
        <div class="nav__acc">
            <div class="nav__login">
                <a class="nav__links hover-line" href="login.html">
                    <i class="fas fa-key"></i>
                    Вход
                </a>
                <a class="nav__links hover-line" href="registration.html">
                    <i class="fas fa-lock"></i>
                    Регистрация
                </a>
            </div>
            <a class="nav__account nav__account_disable nav__links hover-line" href="account.html">
                <i class="fas fa-user"></i>
                Ваш кабинет
            </a>
            <a class="nav__cart" href="#">
                <i class="fas fa-shopping-basket"></i>
                <span class="nav__sum">0</span>
            </a>
        </div>
    </nav>
    <!-- CART FORM -->
    <section class="cart cart_disable">
        <div class="cart__row">
            <div class="cart__product">Ваш заказ</div>
            <div class="cart__quantity">Кол-во</div>
            <div class="cart__sum">Цена</div>
            <div class="cart__cancel"><div class="dat"></div></div>
        </div>
        <div class="order">
            <div class="order__clean order__clean_disable">
                <div class="order__background"></div>
                <div class="order__title">
                    <h1 class="order__title_sub">Пока что</h1>
                    <h1 class="order__title_sup">Ваша корзина пуста</h1>
                </div>
            </div>
            <div class="order-row">
                <div class="order__product">
                    <div class="order__img">
                        <img src="img/main/cards/01.webp">
                    </div>
                    <div class="order__info">
                        <h1>Это суши - суши</h1>
                        <h1>200 г</h1>
                    </div>
                </div>
                <div class="order__quantity">
                    <button><i class="fas fa-minus"></i></button>
                    <span>1</span>
                    <button><i class="fas fa-plus"></i></button>
                </div>
                <div class="order__sum">99 Р</div>
                <button class="order__сancel"><i class="fas fa-times"></i></button>
            </div>
            <div class="order-row">
                <div class="order__product">
                    <div class="order__img">
                        <img src="img/main/cards/02.webp">
                    </div>
                    <div class="order__info">
                        <h1>Это суши - суши</h1>
                        <h1>200 г</h1>
                    </div>
                </div>
                <div class="order__quantity">
                    <button><i class="fas fa-minus"></i></button>
                    <span>1</span>
                    <button><i class="fas fa-plus"></i></button>
                </div>
                <div class="order__sum">99 Р</div>
                <button class="order__сancel"><i class="fas fa-times"></i></button>
            </div>
            <div class="order-row">
                <div class="order__product">
                    <div class="order__img">
                        <img src="img/main/cards/03.webp">
                    </div>
                    <div class="order__info">
                        <h1>Это суши - суши</h1>
                        <h1>200 г</h1>
                    </div>
                </div>
                <div class="order__quantity">
                    <button><i class="fas fa-minus"></i></button>
                    <span>1</span>
                    <button><i class="fas fa-plus"></i></button>
                </div>
                <div class="order__sum">99 Р</div>
                <button class="order__сancel"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="cart__price">
            <div class="cart__price_sum">
                Счет: <span>335 Р<i class="fas fa-tags"></i></span>
            </div>
            <a class="cart__price_btn" type="button" href="purchase.html">Оформить</a>
        </div>
    </section>
</header>
<main class="main">
    <form class="orderreg" action="" method="">
        <div class="orderreg__title"><i class="fas fa-shopping-cart"></i>Оформление заказа</div>
        <div class="orderreg__section">
            <h2 class="orderreg__sub-title">
                <span>1.</span>Укажите данные получателя:
            </h2>
            <div class="orderreg__form-case">
                <div class="orderreg__form address">
                    <input class="orderreg__input address" id="name" type="text" required>
                    <label for="name">Имя получателя</label>
                </div>
            </div>
        </div>
        <div class="orderreg__section">
            <h2 class="orderreg__sub-title">
                <span>2.</span>Укажите контактные данные:
            </h2>
            <div class="orderreg__form-case">
                <div class="orderreg__form">
                    <input class="orderreg__input" id="tel" type="tel">
                    <label for="tel">Контактный номер</label>
                </div>
                <div class="orderreg__form">
                    <input class="orderreg__input" id="mail" type="email">
                    <label for="mail">Контактная почта</label>
                </div>
            </div>
        </div>
        <div class="orderreg__section">
            <h2 class="orderreg__sub-title">
                <span>3.</span>Укажите адресс доставки:
            </h2>
            <div class="orderreg__form-case" action="" method="">
                <div class="orderreg__form address">
                    <input class="orderreg__input address" id="address" type="text">
                    <label for="address">Адресс доставки</label>
                </div>
            </div>
        </div>
        <div class="orderreg__price">
            <div class="orderreg__price-sum">
                Счет:<span>335</span>Р<i class="fas fa-tags"></i>
            </div>
            <a class="orderreg__price-btn" href="done.html">
                <input type="button" value="Оформить">
            </a>
        </div>
    </form>
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
        <!-- FOOTER SOCNET -->
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
</body>
</html>
