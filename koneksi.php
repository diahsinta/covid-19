<?php
$koneksi = mysqli_connect("localhost", "root", "", "covid");
if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>