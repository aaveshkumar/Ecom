<?php
// admin/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Weiboo</title>
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
            <h1>Dashboard</h1>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card bg-primary text-white p-3 mb-3">
                        <h5>Total Orders</h5>
                        <h3>150</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white p-3 mb-3">
                        <h5>Total Revenue</h5>
                        <h3>$12,500</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-dark p-3 mb-3">
                        <h5>Active Products</h5>
                        <h3>45</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info text-white p-3 mb-3">
                        <h5>Customers</h5>
                        <h3>2,300</h3>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>