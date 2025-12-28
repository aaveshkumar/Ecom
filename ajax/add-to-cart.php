<?php
// ajax/add-to-cart.php
header('Content-Type: application/json');
// Mock logic for adding to cart
$product_id = $_POST['product_id'] ?? null;
if ($product_id) {
    echo json_encode(['success' => true, 'message' => 'Product added to cart!', 'cart_count' => 5]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to add product.']);
}
