<?php  
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM odp o INNER JOIN suhu s ON o.id_suhu=s.id_suhu WHERE id_pasien=$id_pasien";
$res = mysqli_query($koneksi, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data ODP</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Data ODP</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detail['nama_pasien'];?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$detail['alamat']?></td>
				</tr>
				<tr>
					<td><strong>Usia</strong></td>
					<td><?=$detail['usia']?></td>
				</tr>
				<tr>
					<td><strong>Telepon</strong></td>
					<td><?=$detail['telp']?></td>
				</tr>
				<tr>
					<td><strong>Cek Terakhir</strong></td>
					<td><?=$detail['tgl_cek']?></td>
				</tr>
				<tr>
					<td><strong>Keterangan</strong></td>
					<td><?=$detail['keterangan']?></td>
				</tr>
				<tr>
					<td><strong>Suhu</strong></td>
					<td><?=$detail['suhu']?></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../aset/footer.php';
?>