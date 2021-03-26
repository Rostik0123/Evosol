<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Наши продукты</title>

    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_products.css">

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
            $products = [
                [
                    'title' => 'Модуль освещённости',
                    'image' => 'img/product.jpg',
                    'price' => '56 бел. руб.',
                    'description' => 'Создан для измерения уровня освещённости в люксах',
                    'href' => 'product_example.php'

                ],
                [
                    'title' => 'Модуль освещённости',
                    'image' => 'img/product.jpg',
                    'price' => '56 бел. руб.',
                    'description' => 'Создан для измерения уровня освещённости в люксах',
                    'href' => 'product_example.php'],
                [
                    'title' => 'Модуль освещённости',
                    'image' => 'img/product.jpg',
                    'price' => '56 бел. руб.',
                    'description' => 'Создан для измерения уровня освещённости в люксах',
                    'href' => 'product_example.php'],
                [
                    'title' => 'Модуль освещённости',
                    'image' => 'img/product.jpg',
                    'price' => '56 бел. руб.',
                    'description' => 'Создан для измерения уровня освещённости в люксах',
                    'href' => 'product_example.php']
            ];
            ?>

            <div class="other-products">
<!--                <div class="column-first">-->
                    <?php
                    for ($i = 0; $i < count($products); $i++):
                    ?>

                    <div class="product">
                        <img src="<?= $products[$i]['image'] ?>">
                        <div class="bg"></div>
                        <a class="product-title"><?= $products[$i]['title'] ?></a>
                        <a class="product-price"><?= $products[$i]['price'] ?></a>
                        <a class="product-description"><?= $products[$i]['description'] ?></a>
                        <div class="front"><a href="<?= $products[$i]['href'] ?>"></a></div>
                    </div>
                    <?php endfor ?>
<!--                    <div class="product">-->
<!--                        <img src="img/product.jpg">-->
<!--                        <div class="bg"></div>-->
<!--                        <a class="product-title">Модуль освещённости</a>-->
<!--                        <a class="product-price">56 бел. руб.</a>-->
<!--                        <a class="product-description">Создан для измерения уровня освещённости в люксах</a>-->
<!--                        <div class="front"><a href="#"></a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="column-second">-->
<!--                    <div class="product">-->
<!--                        <img src="img/product.jpg">-->
<!--                        <div class="bg"></div>-->
<!--                        <a class="product-title">Модуль освещённости</a>-->
<!--                        <a class="product-price">56 бел. руб.</a>-->
<!--                        <a class="product-description">Создан для измерения уровня освещённости в люксах</a>-->
<!--                        <div class="front"><a href="#"></a></div>-->
<!--                    </div>-->
<!--                    <div class="product">-->
<!--                        <img src="img/product.jpg">-->
<!--                        <div class="bg"></div>-->
<!--                        <a class="product-title">Модуль освещённости</a>-->
<!--                        <a class="product-price">56 бел. руб.</a>-->
<!--                        <a class="product-description">Создан для измерения уровня освещённости в люксах</a>-->
<!--                        <div class="front"><a href="#"></a></div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="product-main">
                <img src="img/product_main.jpg">
                <div class="bg"></div>
                <a class="product-title">Центральный модуль</a>
                <a class="product-price">56 бел. руб.</a>
                <a class="product-description">Главный модуль, созданный для работы измерительного прибора</a>
                <div class="front"><a href="#"></a></div>
            </div>
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