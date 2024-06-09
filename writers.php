

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
    <section>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w1.jpeg" alt="Alexander Miller">
            <h3>Alexander Miller</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w2.jpeg" alt="Lucas Rodriguez">
            <h3>Lucas Rodriguez</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w3.avif" alt="Noah Schmidt">
            <h3>Noah Schmidt</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w4.jpeg" alt="Ethan Kowalski">
            <h3>Ethan Kowalski</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w5.jpeg" alt="Liam Alves">
            <h3>Liam Alves</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w10.jpeg" alt="William Andersson">
            <h3>William Andersson</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w7.jpeg" alt="William Andersson">
            <h3>William Andersson</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w8.jpeg" alt="Oliver Martinez">
            <h3>Oliver Martinez</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w9.jpeg" alt="James Nakamura">
            <h3>James Nakamura</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w10.jpeg" alt="Aiden Van Der Berg">
            <h3>Aiden Van Der Berg</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w11.jpeg" alt="Henry Petrovich">
            <h3>Henry Petrovich</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w12.jpeg" alt="Sebastian Wong">
            <h3>Sebastian Wong</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w13.webp" alt="Noah Schmidt">
            <h3>Noah Schmidt</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w14.avif" alt="Daniel Lefevre">
            <h3>Daniel Lefevre</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w1.jpeg" alt="Alexander Miller">
            <h3>Alexander Miller</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w2.jpeg" alt="Lucas Rodriguez">
            <h3>Lucas Rodriguez</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w3.avif" alt="Noah Schmidt">
            <h3>Noah Schmidt</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w4.jpeg" alt="Ethan Kowalski">
            <h3>Ethan Kowalski</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w5.jpeg" alt="Liam Alves">
            <h3>Liam Alves</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w10.jpeg" alt="William Andersson">
            <h3>William Andersson</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w7.jpeg" alt="William Andersson">
            <h3>William Andersson</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w8.jpeg" alt="Oliver Martinez">
            <h3>Oliver Martinez</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w9.jpeg" alt="James Nakamura">
            <h3>James Nakamura</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w10.jpeg" alt="Aiden Van Der Berg">
            <h3>Aiden Van Der Berg</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w11.jpeg" alt="Henry Petrovich">
            <h3>Henry Petrovich</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w12.jpeg" alt="Sebastian Wong">
            <h3>Sebastian Wong</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w13.webp" alt="Noah Schmidt">
            <h3>Noah Schmidt</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w14.avif" alt="Daniel Lefevre">
            <h3>Daniel Lefevre</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w1.jpeg" alt="Alexander Miller">
            <h3>Alexander Miller</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w2.jpeg" alt="Lucas Rodriguez">
            <h3>Lucas Rodriguez</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w3.avif" alt="Noah Schmidt">
            <h3>Noah Schmidt</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w4.jpeg" alt="Ethan Kowalski">
            <h3>Ethan Kowalski</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w5.jpeg" alt="Liam Alves">
            <h3>Liam Alves</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w10.jpeg" alt="William Andersson">
            <h3>William Andersson</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w7.jpeg" alt="William Andersson">
            <h3>William Andersson</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w8.jpeg" alt="Oliver Martinez">
            <h3>Oliver Martinez</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w9.jpeg" alt="James Nakamura">
            <h3>James Nakamura</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w10.jpeg" alt="Aiden Van Der Berg">
            <h3>Aiden Van Der Berg</h3>
        </div>
        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w11.jpeg" alt="Henry Petrovich">
            <h3>Henry Petrovich</h3>
        </div>

        <div class="category-w">
            <img src="../bitirme_projesi/images/writers/w12.jpeg" alt="Sebastian Wong">
            <h3>Sebastian Wong</h3>
        </div>
        

    </section>
    <footer>
        <p>&copy; Library Of World</p>
    </footer>

</body>

</html>