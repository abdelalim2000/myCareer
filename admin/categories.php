<?php
session_start();
include_once "../Classes/Users.php";
$users = new Users();
if (!isset($_SESSION['id'])) {
    header("location: login.php");
}
if ($_SESSION['type'] === "writer") {
    header("location: dashboard.php");
} else {
    $data = $users->readAllUsers();
}
if (isset($_SESSION['id'])) {
    $user = $users->readSingleUser($_SESSION['id']);
}
include_once "../Classes/Categories.php";
$categ = new Categories();
$categories = $categ->readAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Primary Meta Tags -->
    <title>Categories || Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt Bootstrap 5 Dashboard - Transactions">
    <meta name="author" content="Themesberg">
    <meta name="description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"/>
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt">
    <meta property="og:title" content="Volt Bootstrap 5 Dashboard - Transactions">
    <meta property="og:description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="og:image"
          content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt">
    <meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Transactions">
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

<div class="modal fade" id="addCategory" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="handleCategoryAdd.php" method="post">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Category Name</label>
                        <input type="text" name="cName" class="form-control" id="recipient-name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addCategory" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid bg-soft">
    <div class="row">
        <div class="col-12">
            <!--</nav>-->
            <?php include_once "includes/headerAdmin.php" ?>
            <!--</nav>-->

            <main class="content">

                <?php include_once "includes/UserNav.php" ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                    <div class="d-block mb-4 mb-md-0">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="dashboard.php"><span
                                                class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
                            </ol>
                        </nav>
                        <h2 class="h4">All Categories</h2>
                        <p class="mb-0">Categories Controller</p>
                        <button class="btn btn-primary my-2" data-toggle="modal" data-target="#addCategory">
                            <i class="fas fa-plus"></i> Add Category
                        </button>
                    </div>
                </div>
                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Item -->
                        <?php foreach ($categories as $item) : ?>
                            <tr>
                                <td>
                                <span class="font-weight-bold">
                                    <?php echo $item['id'] ?>
                                </span>
                                </td>
                                <td>
                                    <span class="font-weight-normal">
                                        <?php echo $item['name'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="font-weight-normal">
                                        <?php echo $item['created_at'] ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="icon icon-sm">
                                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                                    </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="articles.php?id=<?php echo $item['id'] ?>">
                                                <span class="fas fa-eye mr-2"></span>View Details
                                            </a>
                                            <a class="dropdown-item" href="editCateg.php?id=<?php echo $item['id'] ?>">
                                                <span class="fas fa-edit mr-2"></span>Edit
                                            </a>
                                            <a class="dropdown-item text-danger"
                                               href="handleCategDelete.php?id=<?php echo $item['id'] ?>"><span
                                                        class="fas fa-trash-alt mr-2"></span>Remove</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
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
