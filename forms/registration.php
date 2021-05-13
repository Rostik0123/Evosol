<?php
$data = $_POST['registration'];

function validation(array $data): array
{
    $error = ['success' => true, 'error' => []];
    if ($data['password'] !== $data['passwordRepeat']) {
        $error['success'] = false;
        $error['error']['password'] = 'Пароли не совпадают!';
    }
    if (strlen($data['login']) > 40) {
        $error['success'] = false;
        $error['error']['login'] = 'Превышена длинна';
    }
    if (strlen($data['email']) > 40) {
        $error['success'] = false;
        $error['error']['email'] = 'Превышена длинна';
    }

    return $error;
}

function encryption($password): string
{
    $hash1 = md5('fcghbjjknkdf');
    $hash2 = md5('adssdpjuehfs169@#$^&*(');
    return md5(sprintf('%s%s%s', $hash1, $password, $hash2));
}

function save(array $data, array $roles)
{
    $connect = mysqli_connect('localhost', 'root', '', 'evosol');
    $stmt = mysqli_prepare($connect, 'INSERT INTO `user` (`login`, `password`, `email`, `role`) VALUES (?, ?, ?, ?)');

    $login = $data['login'];
    $password = $data['password'];
    $email = $data['email'];
    $role = serialize($roles);

    mysqli_stmt_bind_param($stmt, "ssss", $login, $password, $email, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $result);
}

$error = validation($data);
if (!$error['success']) {
    $_SESSION['registration']['error'] = $error['error'];
    header('Location: /registration.php');
    exit();
}

$data['password'] = encryption($data['password']);
unset($data['passwordRepeat']);
save($data, ['ROLE_ADMINISTRATOR']);

