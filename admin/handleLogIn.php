<?php
session_start();

if (isset($_SESSION['id'])) {
    header("location: dashboard.php");
}

if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] === 'writer') {
        header("location: dashboard.php");
    }
}

include_once "../Classes/Users.php";
$users = new Users();

if (isset($_POST['login'])) {
    $users->setUserName($_POST['username']);
    $users->setPassword($_POST['password']);
    $user = $users->logIn($users->getUserName(), $users->getPassword());
    $_SESSION['id'] = $user['id'];
    $_SESSION['type'] = $user['type'];
    header("location: dashboard.php");
}