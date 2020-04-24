<?php  
include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM suhu");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data ODP</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data ODP</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah.php">
							<table class="table">
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama_pasien"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><input type="text" name="alamat"></td>
							</tr>
							<tr>
								<td>Usia</td>
								<td><input type="number" name="usia"></td>
							</tr>

							<tr>
								<td>Telepon</td>
								<td><input type="text" name="telp"></td>
							</tr>
							<tr>
								<td>Cek Terakhir</td>
								<td><input type="date" name="tgl_cek"></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td>
									<textarea name="keterangan">

										
									</textarea>
								</td>
							<tr>
								<td>Suhu</td>
								<td>
									<select style="width: 200px" name="id_suhu">
										<option value="">-- Pilih Suhu --</option>
										<?php  
											while ($suhu = mysqli_fetch_assoc($query)):
										?>
										<option value="<?php echo $suhu['id_suhu']; ?>"><?php echo $suhu['suhu']; ?></option>
										<?php
										endwhile;
										?>
										
									</select>
								</td>
							</tr>
							
									
									</select>
								</td>
							
							<tr>
								<th></th>
								<th><input type="submit"class="btn btn-primary" name="simpan" value="simpan"></th>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include '../aset/footer.php';
?>