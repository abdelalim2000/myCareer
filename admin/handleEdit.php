<?php
session_start();

include_once "../Classes/Users.php";
$users = new Users();


if (isset($_POST['register'])) {
    $users->setFirstName($_POST['firstName']);
    $users->setLastName($_POST['lastName']);
    $users->setBirthdate($_POST['birthdate']);
    $users->setGender($_POST['gender']);
    $users->setPhone($_POST['phone']);
    $users->setAddress($_POST['address']);
    $users->setCity($_POST['city']);
    $users->setUserName($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
    $users->setPassword($password);
    $users->setType($_POST['type']);

    $users->editUser($_GET['id']);
    header("location: users.php");
}