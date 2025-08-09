<?php
session_start();   
include('db.php');

if (isset($_POST['login'])) {  

    $phone = htmlspecialchars($_POST['phone']);
    $password = $_POST['password'];

    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE phone='$phone'");
    $user = mysqli_fetch_assoc($result);

   
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];  
        header("Location: dashboard.php");     
    } else {
        echo "رقم الهاتف أو كلمة المرور غير صحيحة!";
    }

} else {
    header("Location: login.php");
}
?>
