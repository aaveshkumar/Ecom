<?php
/**
 * Database Initialization Script
 * Creates all necessary tables in the remote Hostinger MySQL database
 */

require_once __DIR__ . '/../config/database.php';

echo "========================================\n";
echo "Weiboo Fashion Store - Database Setup\n";
echo "========================================\n\n";

// Get the SQL schema
$schema_file = __DIR__ . '/schema.sql';

if (!file_exists($schema_file)) {
    die("Error: schema.sql file not found at $schema_file\n");
}

$sql_content = file_get_contents($schema_file);

// Split SQL into individual statements
$statements = array_filter(
    array_map('trim', explode(';', $sql_content)),
    function($stmt) { return !empty($stmt) && strpos($stmt, '--') !== 0; }
);

$success_count = 0;
$error_count = 0;
$errors = [];

echo "Creating tables...\n\n";

foreach ($statements as $index => $statement) {
    $statement = trim($statement) . ';';
    
    if (empty($statement) || $statement === ';') {
        continue;
    }
    
    // Extract table name for display
    preg_match('/CREATE TABLE IF NOT EXISTS\s+(\w+)/i', $statement, $matches);
    $table_name = isset($matches[1]) ? $matches[1] : "Statement " . ($index + 1);
    
    echo "Creating table: $table_name... ";
    
    if ($conn->query($statement) === TRUE) {
        echo "✓ Success\n";
        $success_count++;
    } else {
        echo "✗ Failed\n";
        $error_count++;
        $errors[] = array(
            'table' => $table_name,
            'error' => $conn->error
        );
    }
}

echo "\n========================================\n";
echo "Setup Complete!\n";
echo "========================================\n";
echo "Tables Created Successfully: $success_count\n";
echo "Tables Failed: $error_count\n";

if ($error_count > 0) {
    echo "\nErrors:\n";
    foreach ($errors as $error) {
        echo "  - {$error['table']}: {$error['error']}\n";
    }
}

// Insert default settings
echo "\nInserting default settings...\n";

$default_settings = array(
    array('store_name', 'Weiboo Fashion Store', 'string', 'Store name'),
    array('store_email', 'info@weiboo.com', 'string', 'Store email'),
    array('store_phone', '+1-800-123-4567', 'string', 'Store phone number'),
    array('store_address', '24/26 Strait Bargate, Boston, PE21, United Kingdom', 'string', 'Store physical address'),
    array('store_currency', 'USD', 'string', 'Default currency'),
    array('store_timezone', 'UTC', 'string', 'Store timezone'),
    array('tax_rate', '0', 'decimal', 'Default tax rate'),
    array('shipping_flat_rate', '10.00', 'decimal', 'Flat shipping rate'),
    array('min_purchase_free_shipping', '100.00', 'decimal', 'Minimum purchase for free shipping'),
    array('admin_email', 'admin@weiboo.com', 'string', 'Admin email address'),
    array('enable_user_registration', '1', 'boolean', 'Allow user registration'),
    array('require_account_for_checkout', '0', 'boolean', 'Require account to checkout'),
);

foreach ($default_settings as $setting) {
    $stmt = $conn->prepare("INSERT IGNORE INTO settings (setting_key, setting_value, setting_type, description) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $setting[0], $setting[1], $setting[2], $setting[3]);
        if ($stmt->execute()) {
            echo "  ✓ {$setting[0]}\n";
        } else {
            echo "  ✗ {$setting[0]}: " . $stmt->error . "\n";
        }
        $stmt->close();
    }
}

// Create admin user
echo "\nCreating default admin user...\n";
$admin_username = "admin";
$admin_email = "admin@weiboo.com";
$admin_password = password_hash("Admin@123", PASSWORD_BCRYPT);
$admin_first_name = "Admin";
$admin_last_name = "User";

$stmt = $conn->prepare("INSERT IGNORE INTO users (username, email, password_hash, first_name, last_name, is_admin, is_active) VALUES (?, ?, ?, ?, ?, 1, 1)");
if ($stmt) {
    $stmt->bind_param("sssss", $admin_username, $admin_email, $admin_password, $admin_first_name, $admin_last_name);
    if ($stmt->execute()) {
        echo "  ✓ Default admin user created\n";
        echo "    Username: $admin_username\n";
        echo "    Email: $admin_email\n";
        echo "    Password: Admin@123 (Please change after first login)\n";
    } else {
        echo "  ✗ Admin user creation failed: " . $stmt->error . "\n";
    }
    $stmt->close();
} else {
    echo "  ✗ Failed to prepare statement: " . $conn->error . "\n";
}

// Create default categories
echo "\nCreating default product categories...\n";

$categories = array(
    array('Dresses', 'dresses', 'Elegant dresses for all occasions'),
    array('Activewear', 'activewear', 'Sports and athletic wear'),
    array('Shoes', 'shoes', 'Footwear collection'),
    array('Accessories', 'accessories', 'Bags, belts, and more'),
    array('Tops', 'tops', 'Shirts, blouses, and t-shirts'),
    array('Bottoms', 'bottoms', 'Pants, skirts, and shorts'),
    array('Outerwear', 'outerwear', 'Jackets and coats'),
    array('Swimwear', 'swimwear', 'Beach and pool wear'),
);

foreach ($categories as $category) {
    $stmt = $conn->prepare("INSERT IGNORE INTO categories (name, slug, description) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $category[0], $category[1], $category[2]);
        if ($stmt->execute()) {
            echo "  ✓ {$category[0]}\n";
        } else {
            echo "  ✗ {$category[0]}: " . $stmt->error . "\n";
        }
        $stmt->close();
    }
}

echo "\n========================================\n";
echo "Database initialization complete!\n";
echo "========================================\n";
echo "\nNext steps:\n";
echo "1. Update default admin password\n";
echo "2. Configure store settings\n";
echo "3. Add product categories\n";
echo "4. Add products\n";
echo "\nDatabase Host: " . getenv('DB_HOST') . "\n";
echo "Database Name: " . getenv('DB_NAME') . "\n";
echo "========================================\n\n";

$conn->close();
?>
