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
            function priceData($goods, $code, $param) {

                $i = 0;
                while (($i < count($goods)) && ($goods[$i]['code'] !== $code)) {
                    $i ++;
                }
                return $goods[$i][$param];
            }

            $goods = [
                [
                    'title' => 'Датчики',
                    'code' => '100',
                    'price' => '5.00',
                    'weight' => '25'],
                [
                    'title' => 'Датчики',
                    'code' => '101',
                    'price' => '5.10',
                    'weight' => '25'],
                [
                    'title' => 'Датчики',
                    'code' => '102',
                    'price' => '5.20',
                    'weight' => '25'],
                [
                    'title' => 'Датчики',
                    'code' => '103',
                    'price' => '5.30',
                    'weight' => '25']
            ];

            /**
             * @param $goods
             * @param $code
             * @param $param
             * @return mixed
             */


            ?>

            <div class="options-other">

                    <div class="option-content">
                        <img src="<? ?>" alt="Новость">
<!--                        <div class="bg"></div>-->
                        <div class="bg"></div>
                        <a class="option-title" style="color: #0f0e0e;"><?= priceData($goods, '102', 'price') ?></a>
                        <a class="option-text"><?= priceData($goods, '100', 'weight') ?></a>
                        <div class="front"><a href="<?  ?>"></a></div>
                    </div>
            </div>

            <div class="settings">
<!--                <img src="img/month.jpg" alt="Новость">-->
<!--                <div class="bg"></div>-->
<!--                <i class="fas fa-user-cog"></i>-->
<!--                <div class="bg"></div>-->
<!--                <a class="option-title">Настройки</a>-->
<!--                <a class="option-text">Изменить настройки аккаунта</a>-->
<!--                <div class="front"><a href="#"></a></div>-->
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