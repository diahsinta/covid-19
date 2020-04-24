<?php
session_start();
if(!isset($_SESSION["id_petugas"])){
  header("Location:http://localhost/covid/login/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="http://localhost/covid/aset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/covid/aset/fontawesome/css/all.min.css">
  <title>COVID</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> Info Covid-19 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/covid/index.php">About</a>
      <a class="nav-item nav-link" href="http://localhost/covid/odp/index.php">Data ODP</a>
      <a class="nav-item nav-link" href="http://localhost/covid/tentang/index.php">Tentang</a>
      <a class="nav-item nav-link" href="http://localhost/covid/login/logout.php">Logout</a>
    </div>
  </div>
</nav>
</body>
</html>