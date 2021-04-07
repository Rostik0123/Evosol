<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Новости | Новый измерительный модуль освещенности появился в продаже</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" /> -->
    <!-- Добавляем стили из CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css"/>
    <!-- Добавляем тему по умолчанию из CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>

    <?php
    require_once('./components/links.php');
    ?>

    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style_product_example.css">

</head>

<body>
<section class="container-body">
    <!---------------------------------------Header------------------->
    <?php
    require_once('./components/header.php');
    ?>

    <!---------------------------------------Content------------------>
    <div class="order">
        <div class="rating">
            <a href="#">Актуальное</a>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <a class="title" href="#">МОДУЛЬ ОСВЕЩЁННОСТИ</a>
        <a class="colors" href="#">Серебристый / Черный / Жёлтый</a>
        <a class="price" href="#">20 бел. руб.</a>
        <div class="buttons">
            <div class="buy">
                <div class="bg"></div>
                <div class="front"></div>
                <p>ДОБАВИТЬ В КОРЗИНУ</p>
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="like">
                <div class="front"></div>
                <div class="bg"></div>
                <i class="fas fa-heart"></i>
            </div>
        </div>
    </div>

    <div class="content-content">

        <div class="container">
            <div class="slider">
                <div class="slider__wrapper">
                    <div class="slider__item">
                        <div class="slider__content">
                            <div class="slider__content_header">
                                <img class="slider__content_img" src="img/product.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__content">
                            <div class="slider__content_header">
                                <img class="slider__content_img" src="img/product.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__content">
                            <div class="slider__content_header">
                                <img class="slider__content_img" src="img/product.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <a class="slider__control slider__control_left" href="#" role="button"></a>
                <a class="slider__control slider__control_right" href="#" role="button"></a>
            </div>
        </div>

        <div class="description">
            <p class="title">
                Описание:
            </p>
            <p class="text">
                Данный прибор подойдёт Создан для измерения уровня освещённости в люксах. Данный прибор подойдёт
                Создан для измерения уровня освещённости в люксах.Данный прибор подойдёт Создан для измерения уровня
                освещённости в люксах. Данный прибор подойдёт Создан для измерения уровня освещённости в люксах.
                Данный прибор подойдёт Создан для измерения уровня освещённости в люксах.
            </p>
            <p class="title">
                Характеристики:
            </p>
            <p class="text">
                • Точность до 0,01 люкса<br>
                • Масса 10 граммов<br>
                • Габариты 3 х 2 х 0,2 см<br>
            </p>
            <p class="title">
                Рейтинг:
            </p>
            <div class="feedback">
                <div class="rating">
                    <p class="num">4.9</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review">397 отзывов</p>
                </div>
                <div class="latest">
                    <div class="bg"></div>
                    <div class="front"></div>
                    <p>ПОСЛЕДНИЕ</p>
                </div>
                <div class="useful">
                    <div class="bg"></div>
                    <div class="front"></div>
                    <p>ПОЛЕЗНЫЕ</p>
                </div>
                <div class="popular">
                    <div class="bg"></div>
                    <div class="front"></div>
                    <p>ПОПУЛЯРНЫЕ</p>
                </div>
            </div>
        </div>


        <!--------------------Comments--------------------->
        <?php
        $comments = [
            [
                'title' => 'ПРЕКРАСНЫЙ МОДУЛЬ ДЛЯ ИЗМЕРЕНИЯ ОСВЕЩЁННОСТИ',
                'stars' => '4.1',
                'date' => 'Февраль 12, 2021',
                'text' => 'Очень удобный модуль при работе в связке с приложением. Также он не обладает большим
                весом. За время эксплуатации минусов замечено не было.'
            ],
            [
                'title' => 'ПРЕКРАСНЫЙ МОДУЛЬ ДЛЯ ИЗМЕРЕНИЯ ОСВЕЩЁННОСТИ',
                'stars' => '4.1',
                'date' => 'Февраль 12, 2021',
                'text' => 'Очень удобный модуль при работе в связке с приложением. Также он не обладает большим
                весом. За время эксплуатации минусов замечено не было.'
            ],
            [
                'title' => 'ПРЕКРАСНЫЙ МОДУЛЬ ДЛЯ ИЗМЕРЕНИЯ ОСВЕЩЁННОСТИ',
                'stars' => '4.1',
                'date' => 'Февраль 12, 2021',
                'text' => 'Очень удобный модуль при работе в связке с приложением. Также он не обладает большим
                весом. За время эксплуатации минусов замечено не было.'
            ]
        ];
        ?>

        <?php
        for ($i = 0; $i < count($comments); $i++):
            ?>
            <div class="comment">
                <div class="information">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p class="date"><?= $comments[$i]['date'] ?></p>
                </div>
                <p class="title"><?= $comments[$i]['title'] ?></p>
                <p class="text"><?= $comments[$i]['text'] ?></p>
            </div>
        <?php endfor ?>

    </div>

    <!---------------------------------------Footer------------------->
    <?php
    require_once('./components/footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f07ff7c4c9.js" crossorigin="anonymous"></script>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js"></script>
<script src="slider.js"></script>

</body>

</html>