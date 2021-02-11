<?php
session_start();
include_once "../Classes/Categories.php";
if (!isset($_SESSION['id'])) {
    header('location: login.php');
}
if ($_SESSION['type'] === 'writer') {
    header('location: dashboard.php');
}
$categ = new Categories();
$categ->deleteCateg($_GET['id']);
header('location: categories.php');