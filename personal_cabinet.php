<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Наши продукты</title>

    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_personal_cabinet.css">

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
            $options = [
                [
                    'title' => 'Датчики',
                    'image' => '<i class="fas fa-briefcase"></i>',
                    'description' => 'Посмтреть сохранённые записи',
                    'href' => '#'],
                [
                    'title' => 'Корзина',
                    'image' => '<i class="fas fa-shopping-cart"></i>',
                    'description' => 'Посмотреть содержимое',
                    'href' => '#'],
                [
                    'title' => 'Отчёты',
                    'image' => '<i class="fas fa-clipboard-list"></i>',
                    'description' => 'Посмтреть сгрупированные записи',
                    'href' => '#'],
                [
                    'title' => 'Желания',
                    'image' => '<i class="fas fa-heart"></i>',
                    'description' => 'Посмтреть мой список',
                    'href' => '#']
            ];
            ?>

            <div class="options-other">
                <?php
                for ($i = 0; $i < count($options); $i++):
                    ?>
                    <div class="option-content">
<!--                        <img src="--><?//= $options[$i]['image'] ?><!--" alt="Новость">-->
<!--                        <div class="bg"></div>-->
                        <?= $options[$i]['image'] ?>
                        <div class="bg"></div>
                        <a class="option-title"><?= $options[$i]['title'] ?></a>
                        <a class="option-text"><?= $options[$i]['description'] ?></a>
                        <div class="front"><a href="<?= $options[$i]['href'] ?>"></a></div>
                    </div>
                <?php endfor ?>
            </div>

            <div class="settings">
<!--                <img src="img/month.jpg" alt="Новость">-->
<!--                <div class="bg"></div>-->
                <i class="fas fa-user-cog"></i>
                <div class="bg"></div>
                <a class="option-title">Настройки</a>
                <a class="option-text">Изменить настройки аккаунта</a>
                <div class="front"><a href="#"></a></div>
            </div>
        </div>

<!--        <div class="more">-->
<!--            <a href="#">-->
<!--                <p>Показать больше</p>-->
<!--                <i class="fas fa-angle-down fa-3x"></i>-->
<!--            </a>-->
<!--        </div>-->
        <!---------------------------------------Footer------------------->
        <?php
        require_once('./components/footer.php');
        ?>

        <script src="https://kit.fontawesome.com/f07ff7c4c9.js" crossorigin="anonymous"></script>
    </section>
</body>

</html>