<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$nama 		= $_POST['nama_pasien'];
	$alamat 	= $_POST['alamat'];
	$usia	 	= $_POST['usia'];
	$telp	 	= $_POST['telp'];
	$tgl_cek 	= $_POST['tgl_cek'];
	$ket 	 	= $_POST['keterangan'];
	$suhu 	 	= $_POST['id_suhu'];
	

	$sql = "INSERT INTO odp(nama, alamat, usia, tlp, tgl_cek, ket, id_suhu) VALUES ('$nama', '$alamat', '$usia', '$telp' '$tgl_cek', '$ket', '$suhu')";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='index.php';
			</script>
		";
	}
}
?>