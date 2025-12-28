# Weiboo Fashion Store

## Overview
This is a PHP-based e-commerce fashion store template. It's a static HTML/PHP website template with multiple home page variations and shop layouts.

## Project Structure
- `/` - Main PHP pages (index.php, shop.php, cart.php, etc.)
- `/partials/` - Reusable PHP components (header, footer, scripts, etc.)
- `/assets/` - Static assets
  - `/assets/css/` - Stylesheets
  - `/assets/fonts/` - Font files
  - `/assets/images/` - Images and graphics
  - `/assets/js/` - JavaScript files

## Running the Project
The project uses PHP's built-in development server:
```
php -S 0.0.0.0:5000
```

## Key Pages
- `index.php` - Main home page
- `index-two.php` through `index-ten.php` - Alternative home page designs
- `shop.php` - Shop listing page
- `product-details.php` - Product detail page
- `cart.php` - Shopping cart
- `checkout.php` - Checkout page
- `contact.php` - Contact page

## Recent Changes
- **December 28, 2025**: Initial import and setup
  - Fixed case-sensitive file names in partials folder (Preloader.php → preloader.php, Script.php → script.php, Scroll.php → scroll.php)
  - Configured PHP development server on port 5000
