<?php
$conn = mysqli_connect('localhost', 'root', '', 'arkademy');

function query($query)
{
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $tampung = [];
    while ($isi = mysqli_fetch_assoc($hasil)) {
        $tampung[] = $isi;
    }
    return $tampung;
}

function tambah($data)
{
    global $conn;
    $nama_produk = $data['nama_produk'];
    $keterangan = $data['keterangan'];
    $harga = $data['harga'];
    $jumlah = $data['jumlah'];
    $query = "INSERT INTO produk VALUES('','$nama_produk','$keterangan','$harga','$jumlah')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $_GET['id'];
    $nama_produk = $data['nama_produk'];
    $keterangan = $data['keterangan'];
    $harga = $data['harga'];
    $jumlah = $data['jumlah'];
    $query = "UPDATE produk SET 
        nama_produk = '$nama_produk',
        keterangan  = '$keterangan',
        harga       = '$harga',
        jumlah      = '$jumlah'
        WHERE id    = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id=$id");

    return mysqli_affected_rows($conn);
}
