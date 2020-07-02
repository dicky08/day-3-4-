<?php
require_once 'functions.php';
$id = $_GET['id'];
$prdk = query("SELECT * FROM produk WHERE id=$id")[0];
if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo "<script> alert('Data Berhasil Diubah');
			document.location.href='index.php';
		 </script>";
    } else {
        echo  mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="nama_produk">Nama Produk</label>
        <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="<?= $prdk['nama_produk'] ?>">
        <br>
        <label for="keterangan">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="form-control" value="<?= $prdk['keterangan'] ?>">
        <br>
        <label for="harga">Harga</label>
        <input type="text" id="harga" name="harga" class="form-control" value="<?= $prdk['harga'] ?>">
        <br>
        <label for="jumlah">Jumlah</label>
        <input type="text" id="jumlah" name="jumlah" class="form-control" value="<?= $prdk['jumlah'] ?>">
        <br>
        <button type="submit" name="submit">Edit</button>
    </form>
</body>

</html>