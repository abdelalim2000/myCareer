<?php

include_once "Classes/Articles.php";

$articles = new Articles();
$data = $articles->getCategArticles($_GET['id'])

?>

<!doctype html>
<html class="no-js" lang="">
<?php require_once "includes/header.php" ?>
<!-- ========================= page-banner-section start ========================= -->
<section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="banner-content">
                    <h2 class="text-white">Our Articles</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="categories.php">Categories</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php echo $_GET['name'] ?> Articles
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= page-banner-section end ========================= -->
<section id="service" class="service-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Collection</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Of our Best Articles</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Read the Article you want know all things around you and be the one you want
                    </p>
                </div>
            </div>
            <?php foreach ($data as $article) : ?>
                <div class="col-12 mx-auto">
                    <!-- CUSTOM BLOCKQUOTE -->
                    <a href="article.php?id=<?php echo $article['id'] ?>&category=<?php echo $_GET['name']?>">
                        <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                            <div class="blockquote-custom-icon bg-info shadow-sm"><i
                                        class="fa fa-quote-left text-white"></i></div>
                            <p class="mb-0 mt-2 font-italic">"
                                <?php
                                if (strlen($article['body'] > 200)) {
                                    $char = strlen($article['body']) * .83;
                                    echo substr($article['body'], $char);
                                }
                                ?>
                                <a href="#" class="text-info">@<?php echo $article['author'] ?></a>."
                            </p>
                            <footer class="blockquote-footer pt-4 mt-4 border-top">by
                                <cite title="Source Title"><?php echo $article['author'] ?></cite>
                            </footer>
                        </blockquote><!-- END -->
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require_once "includes/footer.php" ?>
</html>
