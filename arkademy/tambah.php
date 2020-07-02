<?php
require_once 'functions.php';
if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='index.php';
         </script>
        ";
    } else {
        echo mysqli_error($conn);
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
    <h2>Tambah Data</h2>
    <form action="" method="post">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" id="nama_produk" name="nama_produk" class="form-control">
        <br>
        <label for="keterangan">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="form-control">
        <br>
        <label for="harga">Harga</label>
        <input type="text" id="harga" name="harga" class="form-control">
        <br>
        <label for="jumlah">Jumlah</label>
        <input type="text" id="jumlah" name="jumlah" class="form-control">
        <br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>