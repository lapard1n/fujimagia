<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="fonts/Fontawesome/css/all.css">
    <link rel="shortcut icon" href="../img/logo_sushi.svg" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <a class="nav__logo" href="index_bak.php">
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
                <a class="nav__account nav__account_disable  nav__links hover-line" href="account.php">
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
                <a class="cart__price_btn" type="button" href="purchase.php">Оформить</a>
            </div>
        </section>
    </header>
    <main class="main">
        <!-- LOGIN FORM -->
        <section class="login">
            <div class="login__img">
                <div class="login__background"></div>
                <div class="title">
                    <h1 class="title__sub">Суши с Фудзи</h1>
                    <h1 class="title__sup">И в этом наша магия</h1>
                </div>
            </div>
            <div class="login-case" id="content">

            </div>
        </section>
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
    <script>
        jQuery(function($) {
            $(document).ready(function(){
                showLoginPage();
            });
            $(document).on('submit', '#login_form', function(){


                const login_form = $(this);
                const form_data = JSON.stringify(login_form.serializeArray());
                let postData = { name: 'authUser', params: {} };

                JSON.parse(form_data).forEach(e => { postData.params[`${e.name}`] = e.value; });
                // отправить данные формы в API
                $.ajax({
                    url: "http://fuji.local/api/",
                    type : "POST",
                    contentType : 'application/json',
                    data : JSON.stringify(postData),
                    success : function(result){
                        console.log(result.response.result.token);
                        // сохранить JWT в куки
                       setCookie("jwt", result.response.result.token, 1);
                       setCookie("userID", result.response.result.userID, 1);

                        // показать домашнюю страницу и сообщить пользователю, что вход был успешным
                        //showHomePage();
                        $('#response').html("<div class='alert alert-success'>Успешный вход в систему.</div>");

                    },
                    error: function(xhr, resp, text){

                        // при ошибке сообщим пользователю, что вход в систему не выполнен и очистим поля ввода
                        $('#response').html("<div class='alert alert-danger'>Ошибка входа. Email или пароль указан неверно.</div>");
                        login_form.find('input').val('');
                    }
                });

                return false;
            });

            function showLoginPage() {

                setCookie("jwt", "", 1);

                const html = `<div class="login__title">
                    <h1>Добро</h1>
                    <h1>Пожаловать</h1>
                </div>
                <div id="response"></div>
                <form class="login__form" method="POST" id="login_form">
                    <input class="input" type="email" name="email" placeholder="Ваша почта" autofocus>
                    <input class="input" type="password" name="password" placeholder="Ваш пароль" readonly onfocus="this.removeAttribute('readonly')">
                    <div class="login__help">
                        <a class="login__help_link hover-line" href="#">Забыли пароль?</a>
                    </div>
                    <input class="button" type="submit" value="Вход">
                </form>`;

                $('#content').html(html);
                clearResponse();
                // showLoggedOutMenu();
            }

            function clearResponse(){
                $('#response').html('');
            }

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays* 24 * 60 * 60 * 1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
        });
    </script>
</body>
</html>
