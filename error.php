<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">
<?php include './partials/head.php'?>
<body>
    <?php include './partials/preloader.php' ?>
    <div class="anywere"></div>
    <header id="rtsHeader">
        <?php 
           $title = 'Error 404';
           $subtitle='Pages';
           $subtitle2='404';
        ?>
        <?php include './partials/header-topbar.php' ?>
        <?php include './partials/topbar-menu.php' ?>
        <?php include './partials/navbar-sticky.php' ?>
        <?php include './partials/cart-bar.php' ?>
        <?php include './partials/slidebar.php' ?>
    </header>

    <div class="rts-error-section section-gap">
        <div class="container">
            <div class="error-wrapper text-center">
                <img src="assets/images/error/404-1.png" alt="error" class="mb-5">
                <h2 class="title">Oops! Page Not Found</h2>
                <p class="description mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>

    <?php include './partials/footer.php' ?>
    <?php include './partials/Scroll.php' ?>
    <?php include './partials/script.php'?>
</body>
</html>