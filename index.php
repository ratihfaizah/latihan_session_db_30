<?php
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ade Web</title>
  </head>
  <body>
    <h2 class="text">Website, <?php echo $_SESSION['username'];?> (<?php echo $_SESSION['role'];?>) </h2>
    <p>Klik Disini Untuk Logout <a href="logout.php">Log Out</a></p>

  </body>
</html>
