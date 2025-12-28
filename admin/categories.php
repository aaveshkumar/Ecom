<?php
// admin/categories.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories - Weiboo</title>
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
                <h1>Categories</h1>
                <button class="btn btn-primary">Add New Category</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Men's Fashion</td>
                        <td>mens-fashion</td>
                        <td>
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>