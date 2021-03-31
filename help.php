<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Evosol | Помощь</title>

    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"-->
    <!--          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <?php
    require_once('./components/links.php');
    ?>
    <link rel="stylesheet" href="css/style_help.css">

</head>

<body>
<section class="container-body">
    <!---------------------------------------Header------------------->
    <?php
    require_once('./components/header.php');
    ?>

    <!---------------------------------------Content------------------>
    <div class="content-content">

        <div class="form-wrap">
            <h1>Оставить вопрос:</h1>
            <form method="post" action="">
                <div><input type="text" name="name" required placeholder="Ваше имя"></div>
                <div><input type="email" name="email" required placeholder="Ваш e-mail"></div>
                <div><input type="text" name="problem" required placeholder="Описание проблемы"></div>
                <div class="send">
                    <div class="bg"></div>
                    <div class="front"></div>
                    <p>ОТПРАВИТЬ</p>
                    <i class="fas fa-paper-plane"></i>
                </div>
            </form>
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