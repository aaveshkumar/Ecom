<?php
// admin/settings.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Settings - Weiboo</title>
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
            <h1 class="mb-4">Store Settings</h1>
            <div class="card p-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Store Name</label>
                        <input type="text" class="form-control" value="Weiboo Fashion Store">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact Email</label>
                        <input type="email" class="form-control" value="contact@weiboo.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Currency</label>
                        <select class="form-select">
                            <option selected>USD ($)</option>
                            <option>EUR (€)</option>
                            <option>GBP (£)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Save Settings</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>