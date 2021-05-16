<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evosol | Наши продукты</title>

    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_about.css">
    <!--    <link rel="stylesheet" href="sass/style_about.sass">-->

</head>
<body>
<section class="container-body">
    <!---------------------------------------Header------------------->
    <?php
    require_once('./components/header.php');
    ?>

    <!---------------------------------------Content------------------>
    <div class="content-content">
        <!--        <h1>Страница находится в разработке:)</h1>-->
        <div class="tagline">
            <div class="bg"></div>
            <div class="information">
                <div class="path">
                    <a href="#">Evosol</a>
                    <a href="#">•</a>
                    <a href="#">О проекте</a>
                    <div class="underline"></div>
                </div>
                <a class="pageName">О проекте</a>
                <p class="sloganText">Мы вносим инновации
                    в современные измерительные
                    приборы.</p>
            </div>
            <div class="image">
                <img src="img/tagline.png">
                <div class="front"></div>
            </div>
        </div>
        <div class="target">
            <a class="heading">Цель проекта</a>
            <a class="text">Создание универсального модульного измерительного прибора удобного как для обычного
                пользователя, так и для профессионала.</a>
        </div>
        <div class="line"></div>

        <div class="values">
            <div class="column">
                <img src="img/lego.png">
                <div class="front"></div>
            </div>
            <div class="column-center">
                <div class="image">
                    <img src="img/ecology.png">
                    <div class="front"></div>
                </div>
                <a class="heading">Наши ценности</a>
                <a class="text">Ценности, уоторым мы придерживаемся, создавая наш продукт. И еще немного текста.</a>
            </div>
            <div class="column">
                <img src="img/money.png">
                <div class="front"></div>
            </div>
        </div>

        <div class="team">
            <a class="heading">Наша команда</a>

            <div class="photos">
                <div class="card">
                    <img src="img/founder-edit.png">
                    <a class="name">Ростислав Щуровский</a>
                    <div class="social">
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fab fa-telegram fa-2x"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/co-founder-edit.png">
                    <a class="name">Анатолий Шубин</a>
                    <div class="social">
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fab fa-telegram fa-2x"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/founder-edit.png">
                    <a class="name">Сергей Листопадов</a>
                    <div class="social">
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fab fa-telegram fa-2x"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!---------------------------------------Footer------------------->
    <?php
    require_once('./components/footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f07ff7c4c9.js" crossorigin="anonymous"></script>

</section>
</body>
</html>