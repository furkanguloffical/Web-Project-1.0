<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
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
    <thead>
        <h1>About Us - Library Of World</h1>

        <p>
            Welcome to the Online Library, your digital destination for a diverse collection of books. Our mission is to provide readers with a rich and varied experience, offering a wide range of content on various topics.
        </p>

        <p>
            In our collection, you'll find everything from classics to today's bestsellers. We're here to offer readers an enjoyable journey and the opportunity to make new discoveries.
        </p>

        <p>
            Our mission is to facilitate access to knowledge and culture, encourage reading habits, and build a conscious reading culture in society.
        </p>

        <p>
            At Online Library, we are constantly working and evolving to provide you with the best service. We are delighted to welcome you to a world filled with books!
        </p>
    </thead>

    <footer>
        <p>&copy; Library Of World</p>
    </footer>

</body>

</html>