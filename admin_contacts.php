<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login.php');
};

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `message` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_contacts.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Messages</title>
   <link rel="stylesheet" href="/bitirme_projesi/css/admin.css">
   <style>
      
   </style>
</head>

<body>

   <?php include 'admin_header.php'; ?>

   <section class="messages">


      <div class="box-container">
         <?php
         $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
         if (mysqli_num_rows($select_message) > 0) {
            while ($fetch_message = mysqli_fetch_assoc($select_message)) {

         ?>
               <div class="box">
                  <p> name : <span><?php echo $fetch_message['name']; ?></span> </p>
                  <p> number : <span><?php echo $fetch_message['number']; ?></span> </p>
                  <p> email : <span><?php echo $fetch_message['email']; ?></span> </p>
                  <p> message : <span><?php echo $fetch_message['message']; ?></span> </p>
                  <a href="admin_contacts.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">Delete message</a>
               </div>
         <?php
            };
         }
         ?>
      </div>

   </section>

</body>

</html>