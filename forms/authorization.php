<?php
require_once('./functions/encryption.php');

$data = $_POST['authorization'];

function validation(array $data): array
{
    $error = ['success' => true, 'error' => []];
    if (strlen($data['login']) > 40) {
        $error['success'] = false;
        $error['error']['login'] = 'Превышена длинна';
    }
    if (strlen($data['password']) > 40) {
        $error['success'] = false;
        $error['error']['password'] = 'Превышена длинна';
    }

    return $error;
}


function AuthorizationByPassword($data, $user)
{
    if ($data['password'] === $user['password']) {
        $_SESSION['user'] = $user;
        header('Location: /personal_cabinet.php');
        exit();
    } else {
        $_SESSION['authorization']['error'] = 'Неверный пароль';
        header('Location: /news.php');
        exit();
    }
}

function findUser($login)
{
    $connect = mysqli_connect('localhost', 'root', '', 'evosol');
    $stmt = mysqli_prepare($connect, 'SELECT * FROM `user` WHERE `login` = ? LIMIT 1');
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result[0];
}

$error = validation($data);
if (!$error['success']) {
    $_SESSION['authorization']['error'] = $error['error'];
    header('Location: /authorization.php');
    exit();
}


$data['password'] = encryption($data['password']);
$user = findUser($data['login']);
AuthorizationByPassword($data, $user);

