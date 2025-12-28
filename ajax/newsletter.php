<?php
// ajax/newsletter.php
header('Content-Type: application/json');
$email = $_POST['email'] ?? null;
if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => true, 'message' => 'Thank you for subscribing!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email.']);
}
