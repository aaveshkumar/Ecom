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
           $title = 'Wishlist';
           $subtitle='Home';
           $subtitle2='Wishlist';
        ?>

        <?php include './partials/header-topbar.php' ?>
        
        <?php include './partials/topbar-menu.php' ?>

        <?php include './partials/navbar-sticky.php' ?>

        <?php include './partials/cart-bar.php' ?>

        <?php include './partials/slidebar.php' ?>
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Cart Section Start Here::.. -->
    <div class="rts-wishlist-section section-gap">
        <div class="container">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr class="heading">
                        <th></th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Stock Status</th>
                        <th></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child"><a href="product-details.php"><img
                                    src="assets/images/products/inner/cart/1.jpg" alt=""></a>
                            <a href="product-details.php" class="pretitle">Travel Large Trifold Wallet</a>
                        </td>
                        </td>
                        <td><span class="product-price">$99.00</span></td>
                        <td class="stock">In Stock</td>
                        </td>
                        <td class="last-td"><button class="cart-btn"><i class="rt-basket-shopping"></i> Add To
                                Cart</button></td>
                    </tr>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child"><a href="product-details.php"><img
                                    src="assets/images/products/inner/cart/2.jpg" alt=""></a>
                            <a href="product-details.php" class="pretitle">Travel Large Trifold Wallet</a>
                        </td>
                        <td><span class="product-price">$99.00</span></td>
                        <td class="stock">In Stock</td>
                        <td class="last-td"><button class="cart-btn"><i class="rt-basket-shopping"></i> Add To
                                Cart</button></td>
                    </tr>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child"><a href="product-details.php"><img
                                    src="assets/images/products/inner/cart/3.jpg" alt=""></a>
                            <a href="product-details.php" class="pretitle">Travel Large Trifold Wallet</a>
                        </td>
                        <td><span class="product-price">$99.00</span></td>
                        <td class="stock1">Out Of Stock</td>
                        <td class="last-td"><button class="cart-btn1"><i class="rt-basket-shopping"></i> Add to
                                Cart</button></td>
                    </tr>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child"><a href="product-details.php"><img
                                    src="assets/images/products/inner/cart/4.jpg" alt=""></a>
                            <a href="product-details.php" class="pretitle">Travel Large Trifold Wallet</a>
                        </td>
                        <td><span class="product-price">$99.00</span></td>
                        <td class="stock">In Stock</td>
                        <td class="last-td"><button class="cart-btn"><i class="rt-basket-shopping"></i> Add To
                                Cart</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="wishlist-social">
                <div class="text">
                    <a href="#">Share Now</a>
                </div>
                <div class="icon">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Cart Section End Here::.. -->

    <!-- ..::Footer Start Here::.. -->
    <?php include './partials/footer.php' ?>
    <!-- ..::Footer End Here::.. -->

    <!-- ..::Scroll to Top Start::.. -->
    <?php include './partials/Scroll.php' ?>
    <!-- ..::Scroll to Top End::.. -->

    <?php $script = '<script src="assets/js/vendors/zoom.js"></script>';?>
    <?php include './partials/script.php'?>
</body>

</html>