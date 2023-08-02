<?php
session_start();
if ($_SESSION['status'] != true || !isset($_SESSION["status"])){
  header('Location: index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Palace</title>
  <link rel="styleheet" href="style.css">
</head>
<body>
  <p>Hello,<?= $_SESSION["username"];?>!<br/>
You are successfully logged into your account!<br/>
Your e-mail: <?=$_SESSION["email"]?><br/>
<button id="logout_button"><a href="logout.php">LOG OUT</a></button>




</body>
</html>