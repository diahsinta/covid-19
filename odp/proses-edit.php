<?php

$koneksi = mysqli_connect("localhost", "root", "", "covid");

if(isset($_POST['simpan']))
{
    $id =$_POST['id_pasien'];
    $nama = $_POST['nama_pasien'];
    $alamat= $_POST['alamat'];
    $usia = $_POST['usia'];
    $telp= $_POST['telp']; 
    $cek = $_POST['tgl_cek'];
    $ket=$_POST['keterangan'];
    $id_suhu=$_POST["id_suhu"];
  
$query =mysqli_query($koneksi, "UPDATE odp SET nama_pasien='$nama', alamat ='$alamat', usia='$usia', telp='$telp', tgl_cek='$cek', keterangan='$ket', id_suhu='$id_suhu' WHERE id_pasien =$id");
$count = mysqli_affected_rows($koneksi);

if($count>0)
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}
else
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}

}

?>