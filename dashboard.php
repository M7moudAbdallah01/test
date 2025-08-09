<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<main>
    <h2>مرحبًا، <?php echo $_SESSION['user']; ?>!</h2>
    <!-- هنا محتوى لوحة التحكم -->
</main>

<?php include('footer.php'); ?>
<script src="../js/app.js"></script>
</body>
</html>
