<?php
include_once "../Classes/Categories.php";
$categ = new Categories();

if (isset($_POST['addCategory'])){
    $categ->setName($_POST['cName']);
    $categ->create();
    header("location: categories.php");
}