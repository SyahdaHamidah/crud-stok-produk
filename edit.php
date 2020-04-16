<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>

</style>
<body>
    <?php

    include('koneksi.php');
    $primary = $_GET['kode'];
    $result = $conn->query("SELECT * FROM `barang` WHERE `kode`= $primary");
    foreach ($result as $d){
    ?>
    <form action="prosesedit.php" method="POST" name="formedit">
        <table align="center" cellpadding="10" cellspacing="0">
            <tr align="center">
                <th colspan="2"><h1>Form Edit</h1></th>
            </tr>
            <tr>
                <td>Kode</td>
                <td>auto</td>
            </tr>
            <tr>
                <td>Nama Produk <input type="hidden" name="kode" id="" value="<?php echo $d['kode']; ?>"></td>
                <td><input type="text" name="nama" id="" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" id="" class="i" value="<?php echo $d['harga']; ?>"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <select name="satuan" id="" class="i">
                        <option value="-">Pilih</option>
                        <option <?php if($d['satuan']=="Pcs"){echo "selected=selected";} ?> value="Pcs">Pcs</option>
                        <option <?php if($d['satuan']=="Kg"){echo "selected=selected";} ?> value="Kg">Kg</option>
                        <option <?php if($d['satuan']=="Box"){echo "selected=selected";} ?> value="Box">Box</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kat" id="" class="i">
                        <option  value="-">Pilih</option>
                        <option <?php if($d['kategori']=="Makanan"){echo "selected=selected";} ?> value="Makanan">Makanan</option>
                        <option <?php if($d['kategori']=="Minuman"){echo "selected=selected";} ?> value="Minuman">Minuman</option>
                        <option <?php if($d['kategori']=="Snack"){echo "selected=selected";} ?> value="Snack">Snack</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>URL Gambar</td>
                <td><input type="url" name="url" id="" class="i" value="<?php echo $d['url']; ?>"></td>
            </tr>
            <tr>
                <td>Stok Awal</h4></td>
                <td><input type="number" name="stok" id="" class="i" value="<?php echo $d['stok']; ?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan" class="btn btn-secondary">
                </td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>