<?php
include('koneksi.php');

$kode= $_GET['kode'];

$hasil=$conn->query("DELETE FROM `barang` WHERE `kode` = $kode");
if ($hasil==TRUE) {
    header("location:tampil.php?info=hapus");
}else {
    echo "Data gagal dihapus";
}
?>