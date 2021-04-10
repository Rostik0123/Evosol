<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Новости | Новый измерительный модуль освещенности появился в продаже</title>

    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_news_example.css">

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

    $newsId = (int)$_GET['article'] - 1;
    $article = $newsData[$newsId];
    ?>
    <!---------------------------------------Content------------------>
    <div class="content-content">

        <?php
        $article['key'] = $newsId;
        echo contentPusher($article, './templates/news_article.html.tpl');
        ?>

    </div>
    <!---------------------------------------Footer------------------->
    <?php
    require_once('./components/footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f07ff7c4c9.js" crossorigin="anonymous"></script>
</section>
</body>

</html>