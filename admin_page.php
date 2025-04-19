
<?php

session_start();
if(!isset ($_SESSION['email'])){
  header("location: index.php");
  exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background:#fff;">
  <div class="box">
    <h1>welcome<span> <?=$_SESSION['name'];?></span></h1>
    <p>This is an <span>admin</span>  page</p>
    <button onclick="window.location.href='logout.php'" >logout</button>
  </div>
</body>
</html>