<?php

require_once('./services/security/authorization.php');
require_once('./services/security/hasRole.php');

if (!hasRole('ROLE_MODERATOR')) {
//    header('Location: /authorization.php');
//    exit();
}

?>
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

    </div>

    <!---------------------------------------Footer------------------->
    <?php
    require_once('./components/footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f07ff7c4c9.js" crossorigin="anonymous"></script>
</section>
</body>

</html>