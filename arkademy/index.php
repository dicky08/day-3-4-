<?php
require_once "functions.php";
$dataProduk = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>

<body>
    <div class="container">
        <h2>Data Produk</h2>
        <a href="tambah.php">Tambah Data</a>
        <br>
        <table border="1" cellpadding="10" width="50%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga </th>
                    <th>Jumlah </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dataProduk as $dp) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dp['nama_produk'] ?></td>
                        <td><?= $dp['keterangan'] ?></td>
                        <td><?= $dp['harga'] ?></td>
                        <td><?= $dp['jumlah'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $dp['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?= $dp['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>