<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Главная</title>

    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"-->
    <!--          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_main.css">

</head>

<body>
<section class="container-body">
    <!---------------------------------------Header------------------->
    <?php
    require_once('./components/header.php');
    ?>

    <!---------------------------------------Content------------------>
    <div class="content-content">

        <?php
        $news = [
            [
                'title' => 'Новое:',
                'image' => 'img/week.jpg',
                'text' => 'В релиз вышло обновление нашего приложения 1.01'
            ],
            [
                'title' => 'Новое:',
                'image' => 'img/week.jpg',
                'text' => 'Была выпущена новая образовательная статья (объясняем PHP).'
            ],
            [
                'title' => 'Новость недели:',
                'image' => 'img/week.jpg',
                'text' => 'В релиз вышло обновление нашего приложения 1.01.'
            ],
            [
                'title' => 'Статья недели:',
                'image' => 'img/week.jpg',
                'text' => 'Была выпущена новая образовательная статья (объясняем PHP).'
            ]
        ];
        ?>


        <div class="news-other">
                        <div class="news-latest-all">
            <?php
            for ($i = 0; $i < count($news); $i++):
                ?>
                <div class="news-latest">
                    <img src="<?= $news[$i]['image'] ?>" alt="Новость">
                    <p>
                        <a href="#" class="new"><?= $news[$i]['title'] ?></a>
                        <br>
                        <a href="#" class="text"><?= $news[$i]['text'] ?></a>
                    </p>
                </div>
            <?php endfor ?>

<!--            <div class="news-latest">-->
<!--                <img src="img/week.jpg" alt="Новость">-->
<!--                <p>-->
<!--                    <a href="#" class="new">Новое:</a>-->
<!--                    <br>-->
<!--                    <a href="#" class="text">Была выпущена новая образовательная<br> статья (объясняем PHP).</a>-->
<!--                </p>-->
<!--            </div>-->
                        </div>

            <!--            <div class="news-week-all">-->
<!--            <div class="news-week">-->
<!--                <img src="img/week.jpg" alt="Новость">-->
<!--                <p>-->
<!--                    <a href="#" class="new">Новость недели:</a>-->
<!--                    <br>-->
<!--                    <a href="#" class="text">В релиз вышло обновление нашего<br> приложения 1.01.</a>-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="news-week">-->
<!--                <img src="img/week.jpg" alt="Новость">-->
<!--                <p>-->
<!--                    <a href="#" class="new">Статья недели:</a>-->
<!--                    <br>-->
<!--                    <a href="#" class="text">Была выпущена новая образовательная<br> статья (объясняем PHP).</a>-->
<!--                </p>-->
<!--            </div>-->
            <!--            </div>-->

        </div>

        <div class="news-month">
            <img src="img/month.jpg" alt="Новость">
            <p>
                <a href="#" class="month">Новость месяца:</a>
                <br>
                <a href="#" class="text">В продаже появился новый измерительный модуль (освещённости).</a>
            </p>
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