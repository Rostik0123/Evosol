<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Новости</title>

    <?php

    use App\Services\DBConnector;
    use App\Services\news\newsHandler;

    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_news.css">

</head>

<body>
<section class="container-body">
    <!---------------------------------------Header------------------->
    <?php

    require __DIR__.'/vendor/autoload.php';


    require_once('./components/header.php');

    /**
     * @var $newsData
     */
    require_once('./data/newsData.php');
    require_once('./services/contentPusher.php');
    require_once('./services/DBConnector.php');
    require_once('./services/newsHandler.php');

    $dbConnect = new DBConnector('evosol', 'root', '');

    $newsData = $dbConnect->select()
        ->from('news')
//    ->where('id = :id', ['id' => 2])
//    ->limit(1)
        ->all();

    $newsHandler = new newsHandler();
    $newsData = $newsHandler->timeFix($newsData);
    $newsData = $newsHandler->labelFix($newsData);

    ?>
    <!---------------------------------------Content------------------>

    <div class="content-content">

        <?php
        $j = 0;
        foreach ($newsData as $key => $article) {
            $article['key'] = $key + 1;
//                if ($article['class'] === 'news') {
            if (($j < 3) && ($article['image'] === 'img/month.jpg')) {
                echo contentPusher($article, './templates/news.html.tpl');
                $j++;
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