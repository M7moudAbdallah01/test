<?php
include('db.php');  

if (isset($_POST['register'])) {  

    $username = htmlspecialchars($_POST['username']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  

    $check = mysqli_query($conn, "SELECT * FROM users WHERE phone='$phone'");

    if (mysqli_num_rows($check) > 0) {
        echo "رقم الهاتف مستخدم بالفعل!";
    } else {
    
        $query = "INSERT INTO users (username, phone, password) VALUES ('$username', '$phone', '$password')";
        if (mysqli_query($conn, $query)) {
            header("Location: login.php");  
        } else {
            echo "حدث خطأ أثناء التسجيل!";
        }
    }

} else {
    header("Location: register.php");  
}
?>
