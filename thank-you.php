<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<?php include './partials/head.php' ?>

<body>
    <!-- ..::Preloader Section Start Here::.. -->
    <?php include './partials/preloader.php' ?>
    <!-- ..::Preloader End Here::.. -->

    <div class="anywere"></div>

    <!-- ..::Header Section Start Here::.. -->
    <header id="rtsHeader">
        <?php 
           $title = 'Thank You';
           $subtitle='Home';
           $subtitle2='Thank You';
        ?>
        <?php include './partials/header-topbar.php' ?>
        
        <?php include './partials/topbar-menu.php' ?>

        <?php include './partials/navbar-sticky.php' ?>

        <?php include './partials/cart-bar.php' ?>

        <?php include './partials/slidebar.php' ?>
    </header>
    <!-- ..::Header Section End Here::.. -->
    <!--thanks-area start-->
    <div class="thanks-area">
        <div class="container">
            <div class="section-inner">
                <div class="section-icon">
                    <i class="fal fa-check"></i>
                </div>
                <div class="section-title">
                    <h2 class="sub-title">Thanks For your Order</h2>
                    <h3 class="sect-title">Sorry, we couldn't find the page you where looking for. We suggest that <br> you return to homepage.</h3>
                </div>
                <div class="section-button">
                    <a class="btn-1" href="index.php"><i class="fal fa-long-arrow-left"></i> Go To Homepage</a>
                    <h3>
                        Let's track your order or
                        <a class="btn-2" href="contact.php"> Contact Us</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!--thanks-area end-->

    <!-- ..::Footer Start Here::.. -->
        <?php include './partials/footer.php' ?>
    <!-- ..::Footer End Here::.. -->

    <!-- ..::Scroll to Top Start::.. -->
    <?php include './partials/Scroll.php' ?>
    <!-- ..::Scroll to Top End::.. -->

    <?php include './partials/script.php'?>
</body>

</html>