<?php

$koneksi = mysqli_connect("localhost","root","","covid");

include '../aset/header.php';

$id=$_GET['id_pasien'];

$sql = mysqli_query($koneksi, "SELECT * FROM odp WHERE id_pasien = $id");
$query = mysqli_query($koneksi, "SELECT * FROM suhu");
?>


<!DOCTYPE html>
<head>
    <title>Edit Data ODP</title>
</head>
<body>
<div class="container">
    <div class="row mt-4"> 
        <div class="col-md-9"> 
            <div class="card" style="width:100%;"> 
                <div class="card-header" style="width:100%;"> 
                    <h2><i class="fas fa-user-plus"></i>Edit Data ODP</h2>
                </div> 
                <div class="card-body"> 
                <form action="proses-edit.php" method="post">
                <table class="table">
                <?php
                while ($odp = mysqli_fetch_assoc($sql)):
                    ?>
            <tr>
                <input type="hidden" name="id_pasien" value="<?php echo $odp['id_pasien'];?>">
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_pasien" value="<?php echo $odp['nama_pasien'];?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $odp['alamat'];?>"required></td>
            </tr>  
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia" value="<?php echo $odp['usia'];?>"required></td>
            </tr>   
            <tr>
                <td>Nomor telepon</td>
                <td><input type="text" name="telp" value="<?php echo $odp['telp'];?>" required></td>
            </tr>
            <tr>
                <td>Cek Terakhir</td>
                <td><input type="date" name="tgl_cek" value="<?php echo $odp['tgl_cek'];?>"required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan" value="<?php echo $odp['keterangan'];?>" required>
                <?php echo $odp['keterangan'];?>
                </textarea></td>
            </tr>
            <?php
                endwhile;
                ?>
                <div class="form-group">
                        <!-- // value = menghasilkan nilai tetap -->
                        <!-- // name = bagian dari method post/get 
                        bli,la kok  di tambah data ku kok nilai yo gdu $_POST(kategori); -->
                        
                            <label for="buku">Suhu</label>
                            <select style="width: 100%" name="id_suhu">
                                <option value="">---Pilih Suhu---</option>
                                <?php

                                    while($suhu = mysqli_fetch_assoc($query)):

                                ?>
                                <option value="<?php echo $suhu['id_suhu'];
                                ?>"><?php echo $suhu['suhu'];?></option>
                                <?php
                                    endwhile;
                                ?>
                                
                            </select>
                        </div>
                        <tr>
            <tr>
                <th></th>
                <th><input type="submit" class="btn btn-primary" name="simpan"
                value="simpan"></th>
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