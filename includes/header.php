<?php


include_once "Classes/Categories.php";
$categ = new Categories();
$categories = $categ->readAll();


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Space Bootstrap 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha.min.css">
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
    <!-- Fontawesome -->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- ========================= preloader start ========================= -->
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- ========================= header start ========================= -->
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo/logo.svg" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="page-scroll active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll dd-menu" href="categories.php">Categories</a>

                                <ul class="sub-menu">
                                    <?php foreach ($categories as $category) : ?>
                                        <li class="nav-item">
                                            <a href="viewArticles.php?id=<?php echo $category['id'] ?>&name=<?php echo $category['name'] ?>">
                                                <?php echo $category['name'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>

                        </ul>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</header>
<!-- ========================= header end ========================= -->