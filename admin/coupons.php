<?php
// admin/coupons.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Coupons - Weiboo</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .admin-wrapper { display: flex; }
        .admin-content { flex: 1; padding: 20px; }
    </style>
</head>
<body>
    <div class="admin-wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <main class="admin-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Coupons</h1>
                <button class="btn btn-primary">Create Coupon</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Discount</th>
                        <th>Expiry</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WELCOME20</td>
                        <td>20%</td>
                        <td>2026-01-01</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-danger">Disable</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>