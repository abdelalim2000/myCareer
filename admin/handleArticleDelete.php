<?php
session_start();
include_once "../Classes/Articles.php";
if (!isset($_SESSION['id'])) {
    header('location: login.php');
}

if ($_SESSION['type'] === 'writer') {
    header('location: dashboard.php');
}

$articles = new Articles();
$articles->deleteArticle($_GET['id']);
header('location: dashboard.php');