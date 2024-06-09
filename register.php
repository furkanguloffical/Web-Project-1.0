<?php

include "config.php"; // Tek tırnak kullanılmıştır
//  yorum nasıl yapılır?
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']); //alttaki değer ile uyuşmalıdır yoksa hata verir
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('Query Failed');
    // `users` doğru yazmak önemli
    if (mysqli_num_rows($select_users) > 0) {
        $message[] = 'User already exists';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password does not match';
        } else {
            if ($user_type == 'admin') {
                // Eğer kullanıcı admin olarak kaydedilmek isteniyorsa, hem "user" hem de "admin" olarak kaydet
                mysqli_query($conn, "INSERT INTO `users` (name,email,password,user_type) VALUES ('$name','$email','$cpass','$user_type'), ('$name','$email','$cpass','user')") or die('Query Failed');
            } else {
                // Eğer kullanıcı normal bir kullanıcı olarak kaydedilmek isteniyorsa, sadece "user" olarak kaydet
                mysqli_query($conn, "INSERT INTO `users` (name,email,password,user_type) VALUES ('$name','$email','$cpass','$user_type')") or die('Query Failed');
            }
            $message[] = 'User registered successfully';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/bitirme_projesi/css/style.css">

    <style>
        #register{
   background-image: url("/bitirme_projesi/images/3.jpg");
   background-repeat: no-repeat;
   background-size: cover;
}
    </style>

</head>

<body id="register">


    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
        <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }
    ?>

    <div class="form-container">
        <form action="" method="post" class="form">
            <h3>Join Us</h3>
            <select name="user_type" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="text" name="name" placeholder="Enter your name" require class="box">
            <input type="email" name="email" placeholder="Enter your email" require class="box">
            <input type="password" name="password" placeholder="Enter your password" require class="box">
            <input type="password" name="cpassword" placeholder="Confirm your password" require class="box">
            <input type="submit" name="submit" value="Register" class="btn"></input>
            <p>Already have an account? <a href="login.php">Login</a></p>

        </form>
    </div>

</body>

</html>