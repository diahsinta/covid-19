<?php
include '../koneksi.php';

$sql= "SELECT * from odp o INNER JOIN suhu s ON o.id_suhu=s.id_suhu";

$res = mysqli_query($koneksi, $sql);

$odp = array();

while($data = mysqli_fetch_assoc($res)){
    $odp[] = $data;
}
include '../aset/header.php';
?>
<html>
<head>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
</head>
<body>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
          <div class="card-header">
          <h2 class="card-title"><i class="fas fa-book"></i> Data ODP</h2>
          <a href="tambah.php">Tambah Data ODP</a>
        </div>
        <div class="card-body">
          <table class="table table-dark">
          <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Suhu Terakhir</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
          <?php
          $no =1;
          foreach($odp as $o) {?>
          <tr>
          <td scope="row"><?=$no?></td>
          <td><?=$o['nama_pasien']?></td>
          <td><?=$o['alamat']?></td>
          <td><?=$o['suhu']?></td>
          <td>

              <a href="detail.php?id_pasien=<?= $o['id_pasien'];?>" class="badge badge-success
              ">Detail</a>
              <a href="edit.php?id_pasien=<?= $o['id_pasien'];?>" class="badge badge-warning
              ">Edit</a>
              <a href="hapus.php?id_pasien=<?= $o['id_pasien'];?>" class="badge badge-danger
              ">Hapus</a>
          </td>
          </tr>

          <?php
          $no++;
          }
          ?>
              </tbody>
        </table>
     </div>
  </div>
  </body>
  </html>
<?php
include '../aset/footer.php';
?>