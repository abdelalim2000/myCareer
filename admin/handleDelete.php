<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location: dashboard.php");
}

if ($_SESSION['type'] === 'writer') {
    header("location: dashboard.php");
}

include_once "../Classes/Users.php";
$users = new Users();
if (isset($_GET['id'])) {
    if ($_GET['id'] !== $_SESSION['id']) {
        $users->deleteUser($_GET['id']);
        unlink("storage/users/{$_GET['id']}.jpg");
        header("location: users.php");
    }elseif($_GET['id'] === $_SESSION['id']){
        $users->deleteUser($_GET['id']);
        unlink("storage/users/{$_GET['id']}.jpg");
        header("location: logout.php");
    }
} else {
    header("location: dashboard.php");
}