<?php
if ( (strlen($_POST['name']) >= 2) && (strlen($_POST['name']) < 40) ) {
    $_SESSION['helpForm'] = [
        'name' => htmlspecialchars(($_POST['name'])),
        'email' => htmlspecialchars($_POST['email']),
        'problem' => htmlspecialchars($_POST['problem']),
    ];
} else {
    $_SESSION['error'] = 'name length is too long';
}


