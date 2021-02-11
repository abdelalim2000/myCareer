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
if (isset($_POST['update'])) {
    $users->setFirstName($_POST['firstName']);
    $users->setLastName($_POST['lastName']);
    $users->setBirthdate($_POST['birthdate']);
    $users->setGender($_POST['gender']);
//    $users->setEmail($_POST['email']);
    $users->setPhone($_POST['phone']);
//    $users->setUserName($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
    $users->setPassword($password);
    $users->setAddress($_POST['address']);
    $users->setCity($_POST['city']);
    $users->updateUser($_SESSION['id']);
    session_destroy();
    header("location: login.php");
}

if (isset($_POST['upload'])) {
    $dir = "storage/users/";
    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $img = $_SESSION['id'];
    if ($image !== "") {
        $fdir = $dir . $img . ".jpg";
        move_uploaded_file($temp_name, $fdir);
    }
    header("location: dashboard.php");
}