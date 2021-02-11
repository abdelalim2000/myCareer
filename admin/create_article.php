<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: login.php");
}
if ($_SESSION['type'] === 'writer'){
    header('location: dashboard.php');
}
include_once "../Classes/Users.php";
$users = new Users();
if (isset($_SESSION['id'])) {
    $user = $users->readSingleUser($_SESSION['id']);
}

include_once "../Classes/Articles.php";
$article = new Articles();
$categories = $article->getAllCategories();

if (isset($_POST['createArticle'])) {
    $article->setName($_POST['name']);
    $article->setCategory($_POST['category']);
    $article->setAuthor($_POST['author']);
    $article->setBody($_POST['body']);
    $article->createArticle();
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Primary Meta Tags -->
    <title>Create Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt Bootstrap 5 Dashboard - Settings">
    <meta name="author" content="Themesberg">
    <meta name="description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"/>
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt">
    <meta property="og:title" content="Volt Bootstrap 5 Dashboard - Settings">
    <meta property="og:description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="og:image"
          content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt">
    <meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Settings">
    <meta property="twitter:description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="twitter:image"
          content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <style>
        body, html {
            overflow-x: hidden;
        }
    </style>
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
</head>

<body>

<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../index.php">
        <img class="navbar-brand-dark" src="assets/img/brand/light.svg" alt="Volt logo"/> <img
                class="navbar-brand-light" src="assets/img/brand/dark.svg" alt="Volt logo"/>
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container-fluid bg-soft">
    <div class="row">
        <div class="col-12">

            <?php require_once "includes/headerAdmin.php" ?>


            <main class="content">
                <!--     User Nav here       -->
                <?php require_once "includes/UserNav.php" ?>

                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card card-body bg-white border-light shadow-sm mb-4">
                            <h2 class="h5 mb-4">Add Article</h2>
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="title">Article Title</label>
                                            <input class="form-control" name="name" id="title" type="text"
                                                   placeholder="Enter The Article Title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select name="category" id="category" class="form-select">
                                                <?php foreach ($categories as $category) : ?>
                                                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input class="form-control" name="author" id="author" type="text"
                                                   placeholder="Enter Author" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        <div class="my-4">
                                            <label for="textarea">Article Body</label>
                                            <textarea class="form-control ckeditor" placeholder="Enter your article..."
                                                      id="textarea" rows="4" name="body"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="createArticle" class="btn btn-primary">Create Article
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php include_once "includes/UserFooter.php" ?>
            </main>
        </div>
    </div>
</div>

<!-- Core -->
<script src="vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="vendor/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="vendor/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="vendor/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="vendor/chartist/dist/chartist.min.js"></script>
<script src="vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="assets/js/volt.js"></script>


</body>

</html>
