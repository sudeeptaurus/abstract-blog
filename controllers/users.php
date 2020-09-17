<?php

// $_SESSION['id']

include(ROOT_PATH . "/database/db.php");
include(ROOT_PATH . "/helpers/validateUser.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

function loginUser($user)
{
    // log user in
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now Logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('Location: ' . BASE_URL . 'admin/dashboard.php');
    } else {
        header('Location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['register-btn'])) {

    $errors = validateUser($_POST);

    // dd($errors);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['admin'] = 0;

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        // dd($user);
        loginUser($user);
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_POST['login-btn'])) {
    // dd($_POST);
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            // log user in
            loginUser($user);
        } else {
            array_push($errors, 'Wrong credentials');
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
}
