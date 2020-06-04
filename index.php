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
    <?php require "templates/header.php"?>
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

    <?php require "templates/footer.php"?>
    <script src="/scripts/Shop.js"></script>
    <script src="/scripts/Basket.js"></script>
    <script src="/scripts/Good.js"></script>
    <script src="/scripts/app.js"></script>
</body>
</html>
