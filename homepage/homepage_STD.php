<?php
include('../server_another/server.php');
include('../server_another/sweetaleart.php');
include('../server_another/boostap.php');
include('../server_another/font.php');
include('./homepagecheck_STD.php');
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TVC E-library</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="homepage.css">
  <script src="editProfile.js"></script>
</head>

<body>
  <p><a href="homepage_STD.php?logout='1'" style="color : red;">Logout</a></p>
  <?php include('./navbar.php'); ?>
  <!-- <form class="" enctype="multipart/form-data" method="post">
    <div class="upload">
      <img src="img/<?php echo $user['image']; ?>" alt="" id="image">
      <div class="round" id="upload">
        <input type="file" name="img" id="img" accept=".jpg , .png , .jpeg">
        <i class="fa fa-camera"></i>
      </div>
    </div>
  </form> -->
  <?php

  ?>

</body>

</html>