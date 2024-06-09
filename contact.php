<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Of The World</title>
    <link rel="stylesheet" href="/bitirme_projesi/css/style2.css">

</head>

<body>

    <header>

    <p>Library Of The World</p>

        <nav>
            <div>
                <ul class="dropdown-content-2">
                    <li><a href="home.php" style="color: #ff8c00;">Home</a></li>
                    <li><a href="bestseller.php">Bestseller</a></li>
                    <li><a href="new-releases.php">New Releases</a></li>
                    <li><a href="publishers.php">Publishers</a></li>
                    <li><a href="writers.php">Writers</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="dropdown">
            <span>Categories</span>
            <div class="dropdown-content">
                <a href="../bitirme_projesi/categories/fiction.php">Fiction</a>
                <a href="../bitirme_projesi/categories/mystery.php">Mystery</a>
                <a href="../bitirme_projesi/categories/fantasy.php">Fantasy</a>
                <a href="../bitirme_projesi/categories/romance.php">Romance</a>
                <a href="../bitirme_projesi/categories/biography.php">Biography</a>
                <a href="../bitirme_projesi/categories/autobiography.php">Autobiography</a>
                <a href="../bitirme_projesi/categories/self-help.php">Self-Help</a>
                <a href="../bitirme_projesi/categories/travel.php">Travel</a>
                <a href="../bitirme_projesi/categories/science.php">Science</a>
                <a href="../bitirme_projesi/categories/business.php">Business</a>
                <a href="../bitirme_projesi/categories/pyschology.php">Psychology</a>
                <a href="../bitirme_projesi/categories/cooking.php">Cooking</a>
                <a href="../bitirme_projesi/categories/art.php">Art and Photography</a>
                <a href="login.php" class="delete-btn">Logout</a>

            </div>
        </div>

    </header>

    <section class="contact">

        <div class="form">

            <form action="" method="post">
                <h3>Say Something!</h3>
                <input type="text" name="name" required placeholder="enter your name" class="box">
                <input type="email" name="email" required placeholder="enter your email" class="box">
                <input type="number" name="number" required placeholder="enter your number" class="box">
                <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" name="send" class="btn">
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; Library Of World</p>
    </footer>

</body>

</html>