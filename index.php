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

    /**
     * @var $newsData
     */
    require_once('./data/newsData.php');
    require_once('./functions/contentPusher.php');

    ?>

    <!---------------------------------------Content------------------>
    <div class="content-content">

        <div class="news-other">
            <?php foreach ($newsData as $key => $article) {
                $article['key'] = $key + 1;
                if ($article['class'] === 'index') {
                    echo contentPusher($article, './templates/index-news.html.tpl');
                }
            } ?>
            <!--            --><?php //foreach ($newsData as $key => $article): ?>
            <!--                <div class="news-content">-->
            <!--                    <img src="--><? //= $article['image'] ?><!--" alt="Новость">-->
            <!--                    <div class="bg"></div>-->
            <!--                    <a class="news-title">--><? //= $article['title'] ?><!--</a>-->
            <!--                    <a class="news-text">--><? //= $article['text'] ?><!--</a>-->
            <!--                    <div class="front"><a href="/news_example.php?-->
            <? //= sprintf('article=%s', $key +1) ?><!--">Подробнее</a></div>-->
            <!--                </div>-->
            <!--            --><?php //endforeach; ?>
        </div>

        <div class="news-month">
            <img src="img/month.jpg" alt="Новость">
            <div class="bg"></div>
            <a class="news-title">Новость месяца:</a>
            <a class="news-text">В продаже появился новый измерительный модуль (освещённости).</a>
            <div class="front"><a href="news_article.php"></a></div>
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