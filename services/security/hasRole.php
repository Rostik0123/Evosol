<?php


function hasRole($role): bool
{

    require_once('./services/security/authorization.php');
    /**
     * @var array $roleData
     */
    require_once (__DIR__ . '/roleData.php');
//    if (!isAuthorization()) {
//        return false;
//    }

//    if (!in_array($role, $roleData)) {
//        return false;
//    }

    $keyRole = array_search($role, $roleData);
    $keyUser = array_search($_SESSION['user']['role'], $roleData);
    var_dump($keyRole);
    var_dump($keyUser);
    die();
    if ($keyUser >= $keyRole) {
        return true;
    }

    return false;
}
