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

        /**
         * @var $newsData
         */
        require_once('./data/newsData.php');
        require_once('./services/contentPusher.php');

        ?>
        <!---------------------------------------Content------------------>

        <div class="content-content">

            <?php foreach ($newsData as $key => $article) {
                $article['key'] = $key + 1;
                if ($article['class'] === 'news') {
                    echo contentPusher($article, './templates/news.html.tpl');
                }
            } ?>

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