<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Mohamed_Khaled/Login</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php include('navbar.php'); ?>

    <main>
        <h2>تسجيل الدخول</h2>

        <form method="POST" action="login_process.php">
            <input type="tel" name="phone" placeholder="رقم الهاتف" required pattern="[0-9]{11}">
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit" name="login">دخول</button>
        </form>
    </main>

    <script src="js/app.js"></script>

</body>
</html>
