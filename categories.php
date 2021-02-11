<?php


include_once "Classes/Categories.php";
$categ = new Categories();
$categories = $categ->readAll();


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
                    <h2 class="text-white">Our Categories</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= page-banner-section end ========================= -->

<!-- ========================= service-section start ========================= -->
<section id="service" class="service-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Collection</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Of our Best Categories</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Choose your path
                        <strong>
                            Choose your future
                        </strong>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($categories as $category) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box box-style">
                        <a href="viewArticles.php?id=<?php echo $category['id'] ?>&name=<?php echo $category['name'] ?>">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-layers"></i>
                            </div>
                        </a>
                        <div class="box-content-style service-content">
                            <h4><?php echo $category['name'] ?></h4>
                            <p>
                                A Collection of <br><strong><?php echo $category['name'] ?></strong> <br>Articles
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========================= service-section end ========================= -->

<?php require_once "includes/footer.php" ?>
</html>
