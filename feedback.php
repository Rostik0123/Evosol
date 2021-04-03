<?php
session_start();
if (!empty($_POST)) {
    require_once('./forms/help-form.php');
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
            <h1 id="title">Оставить вопрос:</h1>
            <form id="form" method="POST" action="/feedback.php">
                <div class="inputs">
                    <input type="text" name="name" required placeholder="Ваше имя"
                           value="<?= $_POST['name'] ? $_POST['name'] : '' ?>">
                    <input type="email" name="email" required placeholder="Ваш e-mail"
                           value="<?= $_POST['name'] ? $_POST['email'] : '' ?>">
                    <textarea name="problem" required
                              placeholder="Описание проблемы"><?= $_POST['name'] ? $_POST['problem'] : '' ?></textarea>
                </div>
                <input id="submit" type="submit">
                <div class="send" id="sendButton">
                    <div class="bg"></div>
                    <div class="front"></div>
                    <p>ОТПРАВИТЬ</p>
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