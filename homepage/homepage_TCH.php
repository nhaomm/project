<?php
include('../server_another/server.php');
include('../server_another/sweetaleart.php');
include('../server_another/boostap.php');
include('../server_another/font.php');
include('homepagecheck_TCH.php');
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TVC E-library</title>
  <link rel="stylesheet" href="homepage.css">
  <script src="editProfile.js"></script>
</head>

<body>
  <p><a href="homepage_TCH.php?logout='1'" style="color : red;">Logout</a></p>
  <?php include('navbar.php'); ?>
  <?php echo '<a href="editprofileTCH.php?id=' . $_SESSION['id'] . '">editProfile</a>'; ?>


</body>

</html>