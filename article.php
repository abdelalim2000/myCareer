<?php

include_once "Classes/Articles.php";
$articles = new Articles();
$article = $articles->getSingleArticle($_GET['id'])

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
                                    <?php echo $article['name'] ?>
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
<section id="services" class="service-section pt-130 pb-100">
    <div class="container">
        <?php echo $article['body'] ?>
    </div>
</section>
<!-- ========================= page-banner-section end ========================= -->
<!--<section id="map"></section>-->
<!---->
<!---->
<!--<script>-->
<!--    var map;-->
<!---->
<!--    function initMap() {-->
<!--        map = google.maps.Map(document.getElementById('map'), {-->
<!--            center: {-->
<!--                lat: -34.397,-->
<!--                lng: 150.644-->
<!--            },-->
<!--            zoom: 8-->
<!--        })-->
<!--    }-->
<!--</script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYF1ATW12c6Qs59RH9kqlyhoGqznSL9CU&callback=initMap-->
<!--" async defer></script>-->
<?php require_once "includes/footer.php" ?>
</html>