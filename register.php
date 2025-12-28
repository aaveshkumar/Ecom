<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">
<?php include './partials/head.php'?>
<body>
    <?php include './partials/preloader.php' ?>
    <div class="anywere"></div>
    <header id="rtsHeader">
        <?php 
           $title = 'Registration';
           $subtitle='Account';
           $subtitle2='Register';
        ?>
        <?php include './partials/header-topbar.php' ?>
        <?php include './partials/topbar-menu.php' ?>
        <?php include './partials/navbar-sticky.php' ?>
        <?php include './partials/cart-bar.php' ?>
        <?php include './partials/slidebar.php' ?>
    </header>

    <div class="rts-register-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="register-form-wrapper p-5 border">
                        <h2 class="text-center mb-4">Registration</h2>
                        <form action="account.php" method="POST">
                            <div class="mb-3">
                                <label for="reg-username" class="form-label">Username *</label>
                                <input type="text" class="form-control" id="reg-username" required>
                            </div>
                            <div class="mb-3">
                                <label for="reg-email" class="form-label">Email address *</label>
                                <input type="email" class="form-control" id="reg-email" required>
                            </div>
                            <div class="mb-3">
                                <label for="reg-password" class="form-label">Password *</label>
                                <input type="password" class="form-control" id="reg-password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                            <div class="mt-3 text-center">
                                <p>Already have an account? <a href="login.php">Login here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './partials/footer.php' ?>
    <?php include './partials/Scroll.php' ?>
    <?php include './partials/script.php'?>
</body>
</html>