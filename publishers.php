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


        <table>
            <tr>
                <th>Publisher Name</th>
                <th>Establishment Year</th>
                <th>Specialization Area</th>
            </tr>
            <tr>
                <td>Penguin Random House</td>
                <td>1927</td>
                <td>Fiction, Non-Fiction</td>
            </tr>
            <tr>
                <td>HarperCollins</td>
                <td>1989</td>
                <td>Literature, Fiction, Non-Fiction</td>
            </tr>
            <tr>
                <td>Simon & Schuster</td>
                <td>1924</td>
                <td>Fiction, Non-Fiction, Children's</td>
            </tr>
            <tr>
                <td>Hachette Book Group</td>
                <td>2006</td>
                <td>Fiction, Non-Fiction</td>
            </tr>
            <tr>
                <td>Macmillan Publishers</td>
                <td>1843</td>
                <td>Literature, Science, Education</td>
            </tr>
            <tr>
                <td>W.W. Norton & Company</td>
                <td>1923</td>
                <td>Education, Psychology, Science</td>
            </tr>
            <tr>
                <td>Random House</td>
                <td>1927</td>
                <td>Literature, Fiction, Non-Fiction</td>
            </tr>
            <tr>
                <td>Knopf Doubleday Publishing Group</td>
                <td>1915</td>
                <td>Literature, Fiction, Mystery</td>
            </tr>
            <tr>
                <td>Scholastic Corporation</td>
                <td>1920</td>
                <td>Children's Books, Educational</td>
            </tr>
            <tr>
                <td>Harlequin</td>
                <td>1949</td>
                <td>Romance, Women's Fiction</td>
            </tr>
            <tr>
                <td>Alfred A. Knopf</td>
                <td>1915</td>
                <td>Literature, Fiction, Mystery</td>
            </tr>
            <tr>
                <td>Pearson Education</td>
                <td>1844</td>
                <td>Education</td>
            </tr>
            <tr>
                <td>Scribner</td>
                <td>1846</td>
                <td>Literature, Fiction</td>
            </tr>
            <tr>
                <td>Farrar, Straus and Giroux</td>
                <td>1946</td>
                <td>Literature, Fiction</td>
            </tr>
            <tr>
                <td>Little, Brown and Company</td>
                <td>1837</td>
                <td>Fiction, Non-Fiction</td>
            </tr>
            <tr>
                <td>Pantheon Books</td>
                <td>1942</td>
                <td>Literature, Fiction</td>
            </tr>
            <tr>
                <td>University of Chicago Press</td>
                <td>1891</td>
                <td>Academic, Scholarly</td>
            </tr>
            <tr>
                <td>Doubleday</td>
                <td>1897</td>
                <td>Literature, Fiction</td>
            </tr>
            <tr>
                <td>Princeton University Press</td>
                <td>1905</td>
                <td>Academic, Scholarly</td>
            </tr>
            <tr>
                <td>Bantam Books</td>
                <td>1945</td>
                <td>Fiction, Mystery, Romance</td>
            </tr>
        </table>

    </section>
    <footer>
        <p>&copy; Library Of World</p>
    </footer>

</body>

</html>