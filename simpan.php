<?php
include('koneksi.php');

$nama=$_POST['nama'];
$harga=$_POST['harga'];
$satuan=$_POST['satuan'];
$kat=$_POST['kat'];
$url=$_POST['url'];
$stok=$_POST['stok'];

$result = $conn->exec("INSERT INTO `barang` (`kode`, `nama`, `harga`, `satuan`, `kategori`, `url`, `stok`) VALUES (NULL, '$nama', '$harga', '$satuan', '$kat', '$url', '$stok');");

// echo $result;

if ($result==TRUE) {
    echo "Data berhasil tersimpan";
    include "tampil.php";
}else {
    echo "Data gagal tersimpan";
}
?>