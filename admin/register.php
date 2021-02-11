<?php
session_start();
//if (!isset($_SESSION['id'])){
//    header("location: login.php");
//}
//if ($_SESSION['type'] === "writer") {
//    header("location: dashboard.php");
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Primary Meta Tags -->
    <title>Volt Bootstrap 5 Dashboard - Sign up page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt Bootstrap 5 Dashboard - Sign up page">
    <meta name="author" content="Themesberg">
    <meta name="description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"/>
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt">
    <meta property="og:title" content="Volt Bootstrap 5 Dashboard - Sign up page">
    <meta property="og:description"
          content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="og:image"
          content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt">
    <meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Sign up page">
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


<body class="bg-soft">
<main>

    <!-- Section -->
    <section class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image"
                 data-background-lg="../../assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Create an account</h1>
                        </div>
                        <form action="handleRegister.php" method="post">
                            <!-- Form -->
                            <div class="row">
                                <div class="col form-group mb-4">
                                    <label for="firstName">First Name</label>
                                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span
                                                class="fas fa-user"></span></span>
                                        <input type="text" name="firstName" class="form-control"
                                               placeholder="First Name"
                                               id="firstName" autofocus required>
                                    </div>
                                </div>
                                <div class="col form-group mb-4">
                                    <label for="lastName">Last Name</label>
                                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><span
                                                class="fas fa-user"></span></span>
                                        <input type="text" name="lastName" class="form-control" placeholder="last Name"
                                               id="lastName" autofocus required>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span
                                                class="fas fa-id-badge"></span></span>
                                    <input type="text" name="username" class="form-control" placeholder="Username"
                                           id="username" autofocus required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4"><span
                                                class="fas fa-envelope"></span></span>
                                    <input type="email" name="email" class="form-control"
                                           placeholder="example@company.com"
                                           id="email" autofocus required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="address">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4"><span
                                                class="fas fa-paperclip"></span></span>
                                    <input type="text" name="address" class="form-control"
                                           placeholder="Address"
                                           id="address" autofocus required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="row">
                                <div class="col form-group mb-4">
                                    <label for="birthDate">BirthDate</label>
                                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span
                                                class="fas fa-calendar-alt"></span></span>
                                        <input type="date" name="birthdate" class="form-control"
                                               id="birthDate" autofocus required>
                                    </div>
                                </div>
                                <div class="col form-group mb-4">
                                    <label for="gender">Gender</label>
                                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><span
                                                class="fas fa-user"></span></span>
                                        <select class="form-select" name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="row">
                                <div class="col form-group mb-4">
                                    <label for="city">City</label>
                                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span
                                                class="fas fa-globe"></span></span>
                                        <input type="text" name="city" class="form-control"
                                               id="city" autofocus required placeholder="ex: Cairo">
                                    </div>
                                </div>
                                <div class="col form-group mb-4">
                                    <label for="phone">Phone</label>
                                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><span
                                                class="fas fa-phone-alt"></span></span>
                                        <input type="text" name="phone" class="form-control"
                                               id="phone" autofocus required placeholder="+20-01999999999">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon5"><span
                                                    class="fas fa-unlock-alt"></span></span>
                                        <input type="password" name="password" placeholder="Password"
                                               class="form-control" id="password"
                                               required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="confirm_password">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon6"><span
                                                    class="fas fa-unlock-alt"></span></span>
                                        <input type="password" placeholder="Confirm Password" class="form-control"
                                               id="confirm_password" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="role">Role</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon7"><span
                                                    class="fas fa-user-tag"></span></span>
                                        <select name="type" id="role" class="form-select">
                                            <option value="admin">Admin</option>
                                            <option value="writer">Writer</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="register" class="btn btn-block btn-primary">Register</button>
                        </form>
                        <!--                        <div class="d-flex justify-content-center align-items-center mt-4">-->
                        <!--                                <span class="font-weight-normal">-->
                        <!--                                    Already have an account?-->
                        <!--                                    <a href="sign-in.html" class="font-weight-bold">Login here</a>-->
                        <!--                                </span>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

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
