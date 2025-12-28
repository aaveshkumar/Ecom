<?php
// admin/blog.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blog - Weiboo</title>
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
                <h1>Blog Posts</h1>
                <button class="btn btn-primary">New Post</button>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Top Trends 2026</td>
                        <td>Admin</td>
                        <td><span class="badge bg-primary">Published</span></td>
                        <td>2025-12-28</td>
                        <td>
                            <button class="btn btn-sm btn-info">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>