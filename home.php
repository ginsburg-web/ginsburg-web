<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');

}

?>

<html>
<head>
<title>home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="test.css">
</head>

<body>
<!--Home page login welcome page  -->

<div class="container">

<center>
  <h1>  welcome <?php echo $_SESSION['username']; ?></h1>
  <a class="btn btn-primary" href="logout.php">Logout</a>
  <a class="btn btn-primary" href="varieties.php">Go Corona site</a>
</center>
  </div>
</body>

</html>