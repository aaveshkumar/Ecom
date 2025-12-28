<?php
// admin/orders.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders - Weiboo</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .admin-wrapper { display: flex; }
        .admin-content { flex: 1; padding: 20px; }
    </style>
</head>
<body>
    <div class="admin-wrapper">
        <?php include './partials/sidebar.php'; ?>
        <main class="admin-content">
            <h1 class="mb-4">Orders</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ORD-001</td>
                        <td>John Doe</td>
                        <td>$125.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-sm btn-primary">View</button></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>