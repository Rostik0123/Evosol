<?php
session_start();
if (!empty($_POST)) {
    require_once('./forms/registration.php');
}
?>

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
    <link rel="stylesheet" href="css/style_feedback.css">

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
            <h1 id="title">Зарегаться</h1>
            <form id="form" method="POST" action="/registration.php">
                <div class="inputs">
                    <input type="text" name="registration[login]" required placeholder="Ваше имя"
                           value="<?= $_POST['registration']['login'] ? $_POST['name'] : '' ?>">
                    <input type="email" name="registration[email]" required placeholder="Ваш e-mail"
                           value="<?= $_POST['registration']['email'] ? $_POST['email'] : '' ?>">
                    <input type="password" name="registration[password]" required placeholder="Ваш пароль"
                           value="<?= $_POST['registration']['password'] ? $_POST['password'] : '' ?>">
                    <input type="password" name="registration[passwordRepeat]" required placeholder="Повторите пароль"
                           value="<?= $_POST['registration']['passwordRepeat'] ? $_POST['passwordRepeat'] : '' ?>">
                </div>
                <input id="submit" type="submit">
                <div class="send" id="sendButton">
                    <div class="bg"></div>
                    <div class="front"></div>
                    <p>РЕГИСТРАЦИЯ</p>
                    <i class="fas fa-paper-plane"></i>
                </div>
            </form>

            <script>
                document.getElementById('submit').hidden = true;
                document.getElementById('sendButton').onclick = function () {
                    document.getElementById('submit').click();
                }
            </script>

<!--            <pre>-->
<!--                --><?//= $_SESSION['helpForm'] ?>
<!--            </pre>-->
        </div>

        <?php $_SESSION['helpForm'];
        if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
            echo 'Ошибка ' . $_SESSION['error'];
        } else {
            if (!empty($_SESSION['helpForm'])) {
                ?>
                <script>
                    document.getElementById("title").innerHTML = "Ваш вопрос принят на рассмотрение!)";
                    document.getElementById('form').hidden = true;
                </script>
            <?php }
        }
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