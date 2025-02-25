
<?php
session_start();
include("../config.php");

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Handle content updates
if(isset($_POST['update_content'])) {
    $content = $_POST['content'];
    $section = $_POST['section'];
    // Here you would update your content in a database
    // For now, we'll just show a success message
    $success = "Content updated successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h2>Content Management</h2>
        <hr>
        <?php if(isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <div class="card mb-4">
            <div class="card-header">
                Edit Home Page Content
            </div>
            <div class="card-body">
                <form method="POST">
                    <input type="hidden" name="section" value="home">
                    <textarea name="content" class="form-control">
                        <?php echo "Your existing content here"; ?>
                    </textarea>
                    <button type="submit" name="update_content" class="btn btn-primary mt-3">Update Content</button>
                </form>
            </div>
        </div>
        
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
