<?php
include '../koneksi.php';
session_start();

$id_pasien= $_GET["id_pasien"];

$query = mysqli_query($koneksi,"DELETE FROM odp where id_pasien=$id_pasien");

// var_dump($query);

if($query>0)
{
    echo
    "
    <script>
    alert('data berhasil dihapus');
    document.location.href ='index.php';
    </script>
    ";
}
?>