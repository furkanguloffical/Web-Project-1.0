 <?php

   include 'config.php';
   session_start();
   $admin_id = $_SESSION['admin_id'];

   if (!isset($admin_id)) {
      header('location:login.php');
   }
   ?>

 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/bitirme_projesi/css/admin.css">
 </head>

 <body>

    <?php include 'admin_header.php'; ?>


    <section class="dashboard">

       <h1>Dashboard</h1>

       <div class="box-container">

          <div class="box">
             <?php
               $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
               $number_of_products = mysqli_num_rows($select_products);
               ?>
             <h3><?php echo $number_of_products; ?></h3>
             <p>Products Added</p>
          </div>

          <div class="box">
             <?php
               $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
               $number_of_users = mysqli_num_rows($select_users);
               ?>
             <h3><?php echo $number_of_users; ?></h3>
             <p>Normal Users</p>
          </div>

          <div class="box">
             <?php
               $select_admins = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
               $number_of_admins = mysqli_num_rows($select_admins);
               ?>
             <h3><?php echo $number_of_admins; ?></h3>
             <p>Admin Users</p>
          </div>

          <div class="box">
             <?php
               $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
               $number_of_account = mysqli_num_rows($select_account);
               ?>
             <h3><?php echo $number_of_account; ?></h3>
             <p>Total Accounts</p>
          </div>

          <div class="box">
             <?php
               $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
               $number_of_messages = mysqli_num_rows($select_messages);
               ?>
             <h3><?php echo $number_of_messages; ?></h3>
             <p>New Messages</p>
          </div>


       </div>
    </section>





 </body>

 </html>