<?php
session_start();

session_destroy();
header("Location: http://localhost/covid/login/index.php");

?>

