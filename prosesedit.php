<?php
    include('koneksi.php');
    $primary = $_POST['kode'];
    
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $satuan=$_POST['satuan'];
    $kat=$_POST['kat'];
    $url=$_POST['url'];
    $stok=$_POST['stok'];
    
    $result = $conn->query("UPDATE `barang` SET `nama` = '$nama', `harga` = '$harga', `satuan` = '$satuan', `kategori` = '$kat', `url` = '$url', `stok` = '$stok' WHERE `kode` = $primary; 
    ");

    if($result==TRUE){
        echo "Data berhasil di update"; 
    }else{
        echo "Data gagal di update";
    }
?>