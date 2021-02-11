<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: login.php");
}
include_once "../Classes/Users.php";
$users = new Users();
if (isset($_SESSION['id'])) {
    $user = $users->readSingleUser($_SESSION['id']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Primary Meta Tags -->
    <title><?php echo $user['first_name'] ?>`s Profile</title>
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
                    <div class="col-12 col-xl-8">
                        <div class="card card-body bg-white border-light shadow-sm mb-4">
                            <h2 class="h5 mb-4">General information</h2>
                            <form action="handleUpdate.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div>
                                            <label for="first_name">First Name</label>
                                            <input class="form-control" name="firstName" id="first_name" type="text"
                                                   placeholder="Enter your first name" required
                                                   value="<?php echo $user['first_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div>
                                            <label for="last_name">Last Name</label>
                                            <input class="form-control" name="lastName" id="last_name" type="text"
                                                   placeholder="Also your last name" required
                                                   value="<?php echo $user['last_name'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-3">
                                        <label for="birthday">Birthday</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><span
                                                        class="far fa-calendar-alt"></span></span>
                                            <input class="form-control" id="birthday" type="date"
                                                   placeholder="dd/mm/yyyy" required name="birthdate"
                                                   value="<?php echo $user['birthdate'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="gender">Gender</label>
                                        <select class="form-select mb-0" name="gender" id="gender"
                                                aria-label="Gender select example">
                                            <option>Gender</option>
                                            <option value="female" <?php if ($user['gender'] === "female") echo "selected" ?>>
                                                Female
                                            </option>
                                            <option value="male" <?php if ($user['gender'] === "male") echo "selected" ?>>
                                                Male
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" name="email" id="email" type="email"
                                                   placeholder="name@company.com" required disabled
                                                   value="<?php echo $user['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input class="form-control" name="phone" id="phone" type="text"
                                                   placeholder="+12-345 678 910" required
                                                   value="<?php echo $user['phone'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="password">Username</label>
                                            <input class="form-control" name="username" id="password" type="text"
                                                   placeholder="Enter Username" required disabled
                                                   value="<?php echo $user['username'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="Password">Enter Password</label>
                                            <input class="form-control" name="password" id="Password" type="password"
                                                   placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="h5 my-4">Address</h2>
                                <div class="row">
                                    <div class="col-sm-9 mb-3">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input class="form-control" name="address" id="address" type="text"
                                                   placeholder="Enter your home address" required
                                                   value="<?php echo $user['address'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input class="form-control" name="city" id="city" type="text"
                                                   placeholder="City"
                                                   required value="<?php echo $user['city'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card border-light text-center p-0">
                                    <div class="profile-cover rounded-top"
                                         data-background="../assets/img/profile-cover.jpg"></div>
                                    <div class="card-body pb-5">
                                        <img src="<?php echo $defaultImage ?>"
                                             class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4"
                                             alt="<?php echo $user['first_name'] ?>">
                                        <h4 class="h3"><?php echo "{$user['first_name']} {$user['last_name']}" ?></h4>
                                        <h5 class="font-weight-normal"><?php echo $user['type'] ?></h5>
                                        <p class="text-gray mb-4"><?php echo $user['city'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <form action="handleUpdate.php" method="post" enctype="multipart/form-data" class="col-12">
                                <div class="card card-body bg-white border-light shadow-sm mb-4">
                                    <h2 class="h5 mb-4">Select profile photo</h2>
                                    <div class="d-xl-flex align-items-center">
                                        <div>
                                            <!-- Avatar -->
                                            <div class="user-avatar xl-avatar mb-3">
                                                <img src="<?php echo $defaultImage; ?>"
                                                     class="rounded"
                                                     alt="<?php echo $user['first_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="file-field">
                                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                                <div class="d-flex">
                                                    <span class="icon icon-md"><span
                                                                class="fas fa-paperclip mr-3"></span></span> <input
                                                            type="file" name="image">
                                                    <div class="d-md-block text-left">
                                                        <div class="font-weight-normal text-dark mb-1">Choose Image
                                                        </div>
                                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="upload">Upload Photo</button>
                                </div>
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
