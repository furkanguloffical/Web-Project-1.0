<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['add_product'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $writer = mysqli_real_escape_string($conn, $_POST['writer']);
    $image = $_FILES['image']['name'];
    $book = $_FILES['book']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $book_tmp_name = $_FILES['book']['tmp_name'];

    $image_folder = '../bitirme_projesi/images/books/' . $image;
    $book_folder = '../bitirme_projesi/books/' . $book;

    $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

    if (mysqli_num_rows($select_product_name) > 0) {
        $message[] = 'Product name already added';
    } else {
        $add_product_query = mysqli_query($conn, "INSERT INTO `products` (name, writers, images, book) VALUES ('$name', '$writer', '$image', '$book')") or die('query failed');

        if ($add_product_query) {
            if ($image_size > 2000000) {
                $message[] = 'Image size is too large';
            } else {
                move_uploaded_file($image_tmp_name, $image_folder);
                move_uploaded_file($book_tmp_name, $book_folder);
                $message[] = 'Product added successfully!';
            }
        } else {
            $message[] = 'Product could not be added!';
        }
    }
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_image_query = mysqli_query($conn, "SELECT image, book FROM `products` WHERE id = '$delete_id'") or die('query failed');
    $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
    unlink('../bitirme_projesi/images/books/' . $fetch_delete_image['image']);
    unlink('../bitirme_projesi/books/' . $fetch_delete_image['book']);
    mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_products.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="/bitirme_projesi/css/admin.css">
    <style>
        
    </style>

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <section class="add-products">
        <div>
            <form action="admin_products.php" method="post" enctype="multipart/form-data">
                <h3>Add Book</h3>
                <input type="text" name="name" class="box" placeholder="Enter book name" required>
                <input type="text" name="writer" class="box" placeholder="Enter book writer" required>
                <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
                <input type="file" name="book" accept="application/pdf" class="box" required>
                <input type="submit" value="Add Product" name="add_product" class="btn">
            </form>
        </div>
    </section>

    <section class="show-products">
        <div class="box-container">
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_products = mysqli_fetch_assoc($select_products)) {
            ?>
                    <div class="box">
                        <img src="../bitirme_projesi/images/books/<?php echo $fetch_products['images']; ?>" alt="">
                        <div class="name"><?php echo $fetch_products['name']; ?></div>
                        <div class="writer"><?php echo $fetch_products['writers']; ?></div>
                        <a href="admin_products.php?delete=<?php echo $fetch_products['id']; ?>" class="btn" onclick="return confirm('Delete this product?');">Delete</a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>

</body>

</html>