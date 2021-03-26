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
            <?php
            for ($i = 0; $i < count($news); $i++):
                ?>
                <div class="news-content">
                    <img src="<?= $news[$i]['image'] ?>" alt="Новость">
                    <div class="bg"></div>
                    <a class="news-title"><?= $news[$i]['title'] ?></a>
                    <a class="news-text"><?= $news[$i]['text'] ?></a>
                    <div class="front"><a href="news_example.php"></a></div>
                </div>
            <?php endfor ?>
        </div>

        <div class="news-month">
            <img src="img/month.jpg" alt="Новость">
            <div class="bg"></div>
            <a class="news-title">Новость месяца:</a>
            <a class="news-text">В продаже появился новый измерительный модуль (освещённости).</a>
            <div class="front"><a href="news_example.php"></a></div>
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