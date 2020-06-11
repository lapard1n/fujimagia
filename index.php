<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Магия Фудзи</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" id="indexCssNode">
        <link rel="stylesheet" href="fonts/Fontawesome/css/all.css">
        <link rel="shortcut icon" href="img/logo_sushi.svg" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <header id="header" class="header">
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
                    <a class="nav__links hover-line" id="aboutUs">
                        <i class="fas fa-pencil-alt"></i>
                        О нас
                    </a>
                </div>
                <!-- HEADER MENU LOGO -->
                <a id="index" class="nav__logo">
                    <img src="img/header/header_sushi.svg">
                    <div class="nav__logo_text">
                        <span>Магия</span>
                        <span>Фудзи</span>
                    </div>
                </a>
                <!-- HEADER MENU ACCOUNT -->
                <div class="nav__acc">
                    <div class="nav__login" >
                        <a class="nav__links hover-line" id="login">
                            <i class="fas fa-key"></i>
                            Вход
                        </a>
                        <a class="nav__links hover-line" id="register">
                            <i class="fas fa-lock"></i>
                            Регистрация
                        </a>
                    </div>
                    <div class="nav__login">
                        <a class="nav__links hover-line" id="account">
                            <i class="fas fa-user"></i>
                            Ваш кабинет
                        </a>
                        <a class="nav__links hover-line" id="logout">
                            <i class="fas fa-user"></i>
                            Выйти
                        </a>
                    </div>
                    <a class="nav__cart" href="#" id="cartButton">
                        <i class="fas fa-shopping-basket"></i>
                        <span class="nav__sum" id="cart__total-count">0</span>
                    </a>
                </div>
            </nav>
            <!-- CART FORM -->
            <section class="cart" id="cartWindow">
                <div class="cart__row">
                    <div class="cart__product">Ваш заказ</div>
                    <div class="cart__quantity">Кол-во</div>
                    <div class="cart__sum">Цена</div>
                    <div class="cart__cancel"><div class="dat"></div></div>
                </div>
                <div class="order">
                    <div id="fullCart">

                    </div>
                </div>
                <div class="cart__price" id="cartTotal">
                    <div class="cart__price_sum">
                        Счет: <span id="commonPrice">0 Р<i class="fas fa-tags"></i></span>
                    </div>
                    <a class="cart__price_btn" type="button" id="purchaseBtn">Оформить</a>
                </div>
            </section>
        </header>

        <indexpage id="indexPage">
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
        </indexpage>

        <authpage id="loginPage">
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
                    <div class="login-case" id="loginContent">

                    </div>
                </section>
            </main>
        </authpage>

        <registerpage id="registerPage">
            <main class="main">
                <!-- LOGIN FORM -->

                <section class="login">
                    <div class="login__img">
                        <div class="login__background"></div>
                    </div>
                    <div class="login-case" id="registerContent">
                        <!-- response-->
                        <!-- response-->
                    </div>
                </section>
            </main>
        </registerpage>

        <accountpage id="accountPage">
            <main class="main">
                <div class="account">
                    <div class="account__title">
                        <i class="fas fa-pencil-alt"></i>
                        <h1>Личный Кабинет</h1>
                    </div>
                    <!-- ACCOUNT SECTIONS -->
                    <section class="account-links">
                        <div class="account-links__btns">
                            <div class="btn-case">
                                <div class="account-links__img">
                                    <img src="img/logo_sushi.svg">
                                </div>
                                <button class="btn hover-line" id="account-details__btn">Данные аккаунта</button>
                            </div>
                            <div class="hr"></div>
                            <div class="btn-case">
                                <div class="account-links__img">
                                    <img src="img/main/links_logo.svg">
                                </div>
                                <button class="btn hover-line" id="delivery-history__btn">История заказов</button>
                            </div>
                        </div>
                    </section>
                    <!-- ACCOUNT SECTIONS-CASE -->
                    <div class="account-case">
                        <!-- ACCOUNT DATA SECTION -->
                        <!--                setting_disable-->
                        <section class="setting" id="section-details">
                            <form class="setting__form left">
                                <label class="setting__label" for="name">
                                    <h1>Ваше имя:</h1><span class="user-data" id="userName">Пупа</span>
                                    <input class="setting__input" type="tel" id="tel" placeholder="Введите новое имя">
                                </label>
                                <label class="setting__label" for="tel">
                                    <h1>Ваш номер:</h1><span class="user-data" id="userMobile">+7 (950) 123-45-67</span>
                                    <input class="setting__input" type="tel" id="tel" placeholder="Введите новый номер">
                                </label>
                                <label class="setting__label" for="mail">
                                    <h1>Ваш почта:</h1><span class="user-data" id="userEmail"></span>
                                    <input class="setting__input" type="email" id="mail" placeholder="Введите новую почту">
                                </label>
                                <label class="setting__label" for="address">
                                    <h1>Ваш адрес:</h1><span class="user-data" id="userAddress"></span>
                                    <input class="setting__input" type="text" id="address" placeholder="Введите новый адрес">
                                </label>
                            </form>
                            <form class="setting__form right" action="">
                                <label class="setting__label" for="old-pass">
                                    <h1>Старый пароль:</h1>
                                    <input class="setting__input" type="text" id="old-pass" placeholder="Введите старый пароль">
                                </label>
                                <label class="setting__label" for="new-pass">
                                    <h1>Новый пароль:</h1>
                                    <input class="setting__input" type="text" id="new-pass" placeholder="Введите новый пароль">
                                </label>
                                <input class="setting__button" type="button" value="Принять">
                            </form>
                        </section>
                        <!-- ORDER HISTORY SECTION -->
                        <!--                history_disable-->
                        <section class="history" id="section-history">
                            <div class="cart__sec" id="history-header">
                                <div class="cart__product-sec">Имя товара</div>
                                <div class="cart__quantity-sec">Дата заказа</div>
                                <div class="cart__sum-sec">Цена</div>
                            </div>
                            <div class="order-sec" id="history-container">

                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </accountpage>

        <puschasepage id="purchasePage">
            <main class="main" id="purchaseContent">

            </main>
        </puschasepage>

        <aboutuspage id="aboutusPage">
            <main class="main">
                <div class="about">
                    <div class="section__gr">
                        <div class="section__gr-case">
                            <h1 class="section__gr-text h1">Мы прибыли к Вам прямиком с берегов Востока.</h1>
                            <h2 class="section__gr-text h2">И специально для Вас приготовили отменное блюдо, прошедшее века закалки и оттачивания легендарного рецепта, и имя ему - Суши!</h2>
                            <h1 class="section__gr-text h1">Сотворенный магией у сколна великой Фудзиямы.</h1>
                        </div>
                    </div>
                    <img class="one-suhini" src="img/one-suhini.png">
                    <div class="section__ff">
                        <img class="three-sushka" src="img/three-sushka.png">
                        <img class="sushi-center" src="img/shushi-smile.png">
                        <div class="section__ff-case">
                            <div class="section__ff-right">
                                <h1>Рассчитывайте на нас!</h1>
                                <ol>
                                    <li>На нашу Скорость</li>
                                    <li>На наше Качество</li>
                                    <li>На наше Офомление</li>
                                </ol>
                                <h1>Это наши постулаты</h1>
                            </div>
                            <div class="section__ff-left">
                                <h1>Делитесь Вашим мнением!</h1>
                                <ol>
                                    <li>Мы прислушиваемся к Вам</li>
                                    <li>Мы рады пожеланиям</li>
                                    <li>Мы анализируем критику</li>
                                </ol>
                                <h1>Вместе мы станем лучше</h1>
                            </div>
                        </div>
                        <img class="four-sushich" src="img/four-sushich.png">
                    </div>
                    <img class="two-shusha" src="img/two-shusha.png">
                    <div class="section__rd">
                        <div class="section__rd-case">
                            <h1 class="section__rd-text h1">
                                Мы тоже люди! И сами являемся клиентами.
                            </h1>
                            <h2 class="section__rd-text h2">
                                Именно поэтому мы хотим и делаем все, как человек для человека. Показывая это как в кулинарии, так и в нашем сервисе.
                            </h2>
                            <h1 class="section__rd-text h1">
                                Ведь не зря говорят:"Как ты к людям, так и они к тебе"!
                            </h1>
                        </div>
                    </div>
                </div>
            </main>
        </aboutuspage>

        <donepage id="donePage">
            <main class="main">
                <div class="orderreg">
                    <div class="orderreg__img">
                        <img src="img/shushi-smile.png">
                    </div>
                    <div class="orderreg__title"><i class="fas fa-shopping-cart"></i>Ваш заказ уже в пути!</div>
                    <a class="orderreg__price-btn">
                        <input id="doneIndex" type="button" value="На главную">
                    </a>
                </div>
            </main>
        </donepage>

        <?php require "templates/footer.php"?>
        <script src="/scripts/Shop.js"></script>
        <script src="/scripts/Basket.js"></script>
        <script src="/scripts/Good.js"></script>
        <script src="/scripts/app.js"></script>

        <script>
            const pageList = [
                'login'
                , 'index'
                , 'register'
                , 'account'
                , 'purchase'
                , 'aboutus'
                , 'done'
            ];

            $(document).ready(function () {
                $('#loginPage, #registerPage, #accountPage, #cartWindow, #purchasePage, #aboutusPage, #donePage, #account, #logout').hide();

                if (!isAuthorized()) showLoginInMenu();
                else showLoggedInMenu();

            });
            $(document).on('click', '#cartButton', function (event) {
                $('#cartWindow').toggle();
            });

            //-------PagesController-------//
            function hideLoginPage(){
                $('#loginPage').hide();
                removeSheetLink('login');
            }
            function showLoginPage(){
                $('#loginPage').show();
                addSheetLink('login');

                showLoginPageContent();
            }

            function hideIndexPage(){
                $('#indexPage').hide();
                removeSheetLink('index');
            }
            function showIndexPage(){
                $('#indexPage').show();
                addSheetLink('index');
            }

            function hideRegisterPage(){
                $('#registerPage').hide();
                removeSheetLink('register');
            }
            function showRegisterPage() {
                $('#registerPage').show();
                addSheetLink('register');
                showRegisterPageContent();
            }

            function hideAccountPage() {
                $('#accountPage').hide();
                removeSheetLink('account');
            }
            function showAccountPage() {
                $('#accountPage').show();
                addSheetLink('account');
                showAccountPageContent();
            }

            function hidePurchasePage() {
                $('#purchasePage').hide();
                removeSheetLink('purchase');
            }
            function showPurchasePage() {
                $('#purchasePage').show();
                addSheetLink('purchase');

                showPurchasePageContent();
            }

            function hideAboutusPage() {
                $('#aboutusPage').hide();
                removeSheetLink('aboutus');
            }
            function showAboutusPage() {
                $('#aboutusPage').show();
                addSheetLink('aboutus');
            }

            function hideDonePage() {
                $('#donePage').hide();
                removeSheetLink('done')
            }
            function showDonePage() {
                $('donePage').show();
                addSheetLink('done');
            }
            
            function showLoggedInMenu() {
                $('#login, #register').hide();
                $('#account, #logout').show();
            }
            function showLoginInMenu() {
                $('#account, #logout').hide();
                $('#login, #register').show();
            }

            const hidePagesWithout = (pName) => {
                pageList.forEach((e) => {
                    if(e !== pName) window[`hide${ucFirst(e)}Page`]();
                });
                $('#cartWindow').hide();
            }
            //----------PagesController---------//


            //--------------INDEX---------------//
            $(document).on('click', '#index', function () {
                hidePagesWithout('index');

                showIndexPage();
            });
            //--------------INDEX---------------//


            //------------LOGIN PAGE------------//
            $(document).on('click', '#login', function () {
                hidePagesWithout('login');
                showLoginPage();
            })
            $(document).on('submit', '#login_form', function(e){
                e.preventDefault();
                const login_form = $(this);
                const form_data = JSON.stringify(login_form.serializeArray());
                let postData = { name: 'authUser', params: {} };

                JSON.parse(form_data).forEach(e => { postData.params[`${e.name}`] = e.value; });
                // отправить данные формы в API
                $.ajax({
                    url: getUrl()+'/api/',
                    type : "POST",
                    contentType : 'application/json',
                    data : JSON.stringify(postData),
                    success : function(result){
                        if(result.response.result.token !== undefined)
                        {
                            setCookie("jwt", result.response.result.token, 1);
                            setCookie("userID", result.response.result.userID, 1);

                            showLoggedInMenu();
                            hidePagesWithout('account');
                            showAccountPage();
                        }
                        else {
                            $('#response').html("<h2 class='alert alert-success'>Ошибка входа. Email или пароль указан неверно.</h2>");
                            setCookie("jwt", "", 1);
                        }
                    },
                    error: function(xhr, resp, text){
                        $('#response').html("<div class='alert alert-danger'>Внутренняя ошибка сервера. Пожалуйста, обратитесь к администратору.</div>");
                        login_form.find('input').val('');
                    }
                });
            });
            function showLoginPageContent() {
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

                $('#loginContent').html(html);
                clearResponse();
                // showLoggedInMenu();
            }
            //------------LOGIN PAGE------------//


            //----------Register Page-----------//
            $(document).on('click', '#register', function () {
                hidePagesWithout('register');
                showRegisterPage();
            })
            $(document).on('submit', '#sign_up_form', function(e){
                e.preventDefault();
                let sign_up_form = $(this);
                let form_data = JSON.stringify(sign_up_form.serializeArray());
                let postData = { name: 'registerUser', params: {} };

                JSON.parse(form_data).forEach(e => { postData.params[`${e.name}`] = e.value; });
                if(postData.params['rePassword'] === postData.params['password'])
                {
                    delete postData.params['rePassword'];

                    $.ajax({
                        url: "http://fuji.local/api/",
                        type : "POST",
                        contentType : 'application/json',
                        data : JSON.stringify(postData),
                        success : function(result) {
                            const {email, password} = postData.params;
                            const authData = {
                                name: "authUser"
                                , params:{ email, password }
                            };
                            $.ajax({
                                url: getUrl()+'/api/',
                                type : "POST",
                                contentType : 'application/json',
                                data : JSON.stringify(authData),
                                success : function(result){
                                    if(result.response.result.token !== undefined)
                                    {
                                        setCookie("jwt", result.response.result.token, 1);
                                        setCookie("userID", result.response.result.userID, 1);

                                        showLoggedInMenu();
                                        hidePagesWithout('account');
                                        showAccountPage();

                                    }
                                    else {
                                        $('#response').html("<h2 class='alert alert-success'>Ошибка входа. Email или пароль указан неверно.</h2>");
                                        setCookie("jwt", "", 1);
                                    }
                                },
                            });

                            // hidePagesWithout('account');
                            // showAccountPage();
                        },
                        error: function(xhr, resp, text){
                            $('#response').html("<div class='alert alert-danger'>Невозможно зарегистрироваться. Пожалуйста, свяжитесь с администратором.</div>");
                        }
                    });

                }else{
                    $('#response').html("Пароли указаны некорректно!");

                }

                return false;
            });
            const showRegisterPageContent = () => {
                const html = `
                    <div class="login__title">
                        <h1>Добро</h1>
                        <h1>Пожаловать</h1>
                    </div>
                    <div id="response"></div>
                    <form class="login__form" method="POST" id="sign_up_form">
                        <input class="input" type="text" name="name" placeholder="Введите ваше имя" autocomplete="on" autofocus>

                        <input class="input mail" type="email" name="email" placeholder="Ваша почта">
                        <input class="input tel" type="tel" name="mobile" placeholder="Ваш номер">
                        <input class="input" type="text" name="addr" placeholder="Ваш адрес">
                        <input class="input" type="password" name="password" placeholder="Введите ваш пароль" readonly onfocus="this.removeAttribute('readonly')">
                        <input class="input" type="password" name="rePassword" placeholder="Повторите пароль" readonly onfocus="this.removeAttribute('readonly')">
                        <input class="button" type="submit" value="Регистрация">
                    </form>`;

                clearResponse();
                $('#registerContent').html(html);
            }
            //----------Register Page-----------//


            //----------Account Page------------//
            $(document).on('click', '#account', function () {
                hidePagesWithout('account');
                showAccountPage();
            });
            $(document).on('click', '#account-details__btn', function () {
                $('#section-history').hide();
                $('#section-details').show();
                showAccountPageContent();
            });
            $(document).on('click', '#delivery-history__btn', function () {
                $('#section-details').hide();
                $('#section-history').show();
                deliveryHistory();
            });
            const showAccountPageContent = () => {
                $('#section-history').hide();
                accountDetails();
            };
            function accountDetails(){
                $('#section-history').hide();

                const postData = {
                    name: 'getDetailsById'
                    , params: {
                        id: getCookie('userID')
                    }
                };
                $.ajax({
                    url: "http://fuji.local/api/",
                    type : "POST",
                    contentType : 'application/json',
                    data : JSON.stringify(postData),
                    success : function(result){
                        const {name, address, email, mobile} = result.response.result;

                        $("#userName").html(name);
                        $('#userMobile').html(mobile);
                        $('#userEmail').html(email);
                        $('#userAddress').html(address);
                    },

                    error: function(xhr, resp, text){}
                })
            }
            function deliveryHistory(){
                $('#section-details').hide();

                const postData = {
                    name: 'ordersHistory'
                    , params: {
                        client: getCookie('userID')
                    }
                };
                $.ajax({
                    url: "http://fuji.local/api/",
                    type : "POST",
                    contentType : 'application/json',
                    data : JSON.stringify(postData),
                    success : function(result){
                        console.log(result.response.result);
                        $('#history-container').html('');
                        result.response.result.forEach(e => {
                            const html = `<div class="order-sec" id="orderId">
                                <div class="order-row-sec">
                                    <div class="order__info-sec">
                                        <h1>${e.products}</h1>
                                    </div>
                                    <div class="order__quantity-sec">
                                        <span>${e.created_on}</span>
                                    </div>
                                    <div class="order__sum-sec">${e.cost}</div>
                                </div>
                            </div>`;
                            $('#history-container').append(html);
                        });

                    },

                    error: function(xhr, resp, text){}
                })
            }
            //----------Account Page------------//

            //----------Purchase Page-----------//
            $(document).on('click', '#purchaseBtn', function (event) {
                hidePagesWithout('purchase');
                showPurchasePage();
            });
            $(document).on('submit', '#puschase_form', function (e) {
                e.preventDefault();
                const purchase_form = $(this);
                const form_data = JSON.stringify(purchase_form.serializeArray());
                const userID = getCookie('userID');
                let products = '';

                let postData = {
                    name: 'orderIssue'
                    , params: {cost: basket.commonPrice, client: ''}
                };

                if(userID !== '' || userID !== undefined)
                    postData.params['client'] = userID;

                JSON.parse(form_data).forEach(e => {
                    postData.params[`${e.name}`] = e.value;
                });

                basket.goods.forEach(e => {
                    products += ' ' + e.name
                });

                postData.params['products'] = products.substr(products.indexOf(" ") + 1);

                $.ajax({
                    url: getUrl()+'/api/',
                    type : "POST",
                    contentType : 'application/json',
                    data : JSON.stringify(postData),
                    success : function(result){
                        do {
                            basket.goods.forEach(e => { basket.removeGood(e)});
                        }while (basket.goods.length !== 0)
                    },
                    error: function(xhr, resp, text){

                    }
                });
                return false;
            });
            function showPurchasePageContent(){
                const html = `<form class="orderreg" id="puschase_form">
                    <div class="orderreg__title"><i class="fas fa-shopping-cart"></i>Оформление заказа</div>
                    <div class="orderreg__section">
                        <h2 class="orderreg__sub-title">
                            <span>1.</span>Укажите данные получателя:
                        </h2>
                        <div class="orderreg__form-case">
                            <div class="orderreg__form address">
                                <input class="orderreg__input address" name="name" id="name" type="text" required>
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
                                <input class="orderreg__input" name="mobile" id="tel" type="tel">
                                <label for="tel">Контактный номер</label>
                            </div>
                            <div class="orderreg__form">
                                <input class="orderreg__input" name="email" id="email" type="email">
                                <label for="mail">Контактная почта</label>
                            </div>
                        </div>
                    </div>
                    <div class="orderreg__section">
                        <h2 class="orderreg__sub-title">
                            <span>3.</span>Укажите адресс доставки:
                        </h2>
                        <div class="orderreg__form-case">
                            <div class="orderreg__form address">
                                <input class="orderreg__input address" name="address" id="address" type="text">
                                <label for="address">Адресс доставки</label>
                            </div>
                        </div>
                    </div>
                    <div class="orderreg__price">
                        <div class="orderreg__price-sum">
                            Счет:<span id="purchaseCommonPrice">${basket.commonPrice}</span>Р<i class="fas fa-tags"></i>
                        </div>
                        <a class="orderreg__price-btn">
                            <input type="submit" value="Оформить" id="issueBtn">
                        </a>
                    </div>
                </form>`;

                clearResponse();
                $('#purchaseContent').html(html);
            }
            //----------Purchase Page-----------//


            //----------About us Page-----------//
            $(document).on('click', '#aboutUs', function () {
                hidePagesWithout('aboutus');
                showAboutusPage();
            });
            //----------About us Page-----------//


            //------------Done Page-------------//
            $(document).on('click', '#issueBtn', function (event) {
                hidePagesWithout('done');
                $('#header, #footer').hide();
                showDonePage();
            });
            $(document).on('click', '#doneIndex', function (event) {
                hidePagesWithout('index');
                $('#header, #footer').show();
                showIndexPage();
            })
            //------------Done Page-------------//

            //-------------LOG OFF--------------//
            $(document).on('click', '#logout', function () {
                setCookie('jwt', '', 1);
                setCookie('userID', '', 1);
                showLoginInMenu();
                hidePagesWithout('index');
                showIndexPage();
            })
            //-------------LOG OFF--------------//


            //----------UTILS FUNCTIONS---------//
            const clearResponse = () => {
                $('#response').html('');
            }
            const setCookie = (cname, cvalue, exdays) => {
                let d = new Date();
                d.setTime(d.getTime() + (exdays* 24 * 60 * 60 * 1000));
                const expires = "expires="+ d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            const getCookie = (cname) => {
                let name = cname + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for(let i = 0; i <ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) === ' '){
                        c = c.substring(1);
                    }

                    if (c.indexOf(name) === 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            const addSheetLink = (sheetName) => {
                const filePath = getUrl() + '/css/' + sheetName;
                $('head').append('<link rel="stylesheet" type="text/css" href="'+filePath+'.css" id="'+sheetName+'CssNode">');
            }
            const removeSheetLink = (sheetName) => {$(`#${sheetName}CssNode`).remove();}
            const getUrl = () =>{ return "http://fuji.local"; }
            const ucFirst = (s) => { return s = s.charAt(0).toUpperCase() + s.substr(1).toLowerCase(); }
            const isAuthorized = () => { return !(getCookie('jwt') === '' || getCookie('jwt') === undefined); }
            const getCommonPrice = () => { return $("#commonPrice").textContent; };
            const insertAfter = (newNode, referenceNode) => {
                referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
            }
            //----------UTILS FUNCTIONS---------//

        </script>
    </body>
</html>
