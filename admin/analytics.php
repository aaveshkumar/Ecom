<?php
// admin/analytics.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics & Logs - Weiboo</title>
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
            <h1 class="mb-4">Analytics & Logs</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-3 mb-4">
                        <h4>Recent Page Views</h4>
                        <table class="table table-sm">
                            <thead><tr><th>Page</th><th>Views</th></tr></thead>
                            <tbody><tr><td>/home</td><td>1,200</td></tr></tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3 mb-4">
                        <h4>System Logs</h4>
                        <table class="table table-sm text-danger">
                            <thead><tr><th>Level</th><th>Message</th></tr></thead>
                            <tbody><tr><td>Error</td><td>Database connection failed</td></tr></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>