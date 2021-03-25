<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Новости</title>

    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_news.css">

</head>

<body>
    <section class="container-body">
        <!---------------------------------------Header------------------->
        <?php
        require_once('./components/header.php');
        ?>
        <!---------------------------------------Content------------------>
        <?php
        $news = [
            [
                'title' => 'Новости',
                'time' => '10 часов назад',
                'image' => 'img/month.jpg',
                'description' => 'В продаже появился новый измерительный модуль освещённости',
                'href' => 'news_example.php'
            ],
            [
                'title' => 'Новости',
                'time' => '10 часов назад',
                'image' => 'img/month.jpg',
                'description' => 'В продаже появился новый измерительный модуль освещённости',
                'href' => 'news_example.php'
            ],
            [
                'title' => 'Новости',
                'time' => '10 часов назад',
                'image' => 'img/month.jpg',
                'description' => 'В продаже появился новый измерительный модуль освещённости',
                'href' => 'news_example.php'
            ]
        ];
        ?>

        <div class="content-content">
            <?php
            for ($i = 0; $i < count($news); $i++):
            ?>

            <div class="news">
                <img src="<?= $news[$i]['image'] ?>">
                <div class="bg"></div>
                <div class="content-news">
                    <p class="news-title"><?= $news[$i]['title'] ?> • <?= $news[$i]['time'] ?></p>
                    <p class="news-description"><?= $news[$i]['description'] ?></p>
                </div>
                <div class="front"><a href="<?= $news[$i]['href'] ?>"></a></div>
            </div>
            <?php endfor ?>

        </div>

        <div class="more">
            <a href="#">
                <p>Показать больше</p>
                <i class="fas fa-angle-down fa-3x"></i>
            </a>
        </div>
        <!---------------------------------------Footer------------------->
        <?php
        require_once('./components/footer.php');
        ?>

        <script src="https://kit.fontawesome.com/f07ff7c4c9.js" crossorigin="anonymous"></script>
    </section>
</body>

</html>