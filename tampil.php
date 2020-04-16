<?php include('koneksi.php') ?>
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
    .red {
        background: red;
        color: white;
    }
</style>

<body>
    
    <header align="center"> 
        <h2>Data Produk</h2>
    </header>
    <left>
        <input type="button" id="button" class="btn btn-secondary" value="Kembali" onclick="window.location.href = 'input.php';">
    </left>
    <br>
    <div class="container">
        <table class="table" id="out" align="center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Kategori Produk</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query('SELECT * FROM `barang`');

                if (isset($_GET['info'])) {
                    $info=$_GET['info'];
                    if ($info=='hapus') {
                        echo "Data berhasil dihapus";
                    }
                }

                $i=1;
                foreach($result as $d):
                    $img = $d['url'];
                    echo "<tr>";
                    
                    echo "<td>".$i."</td>";
                    echo "<td>"."MD-".$d['kode']."</td>";
                    echo "<td>".$d['nama']."</td>";
                    echo "<td>"."Rp. ".$d['harga']."</td>";
                    // echo "<td>".$d['harga']."</td>";
                    echo "<td>".$d['satuan']."</td>";
                    echo "<td>".$d['kategori']."</td>";
                    echo "<td>"."<img src='$img' width='100' height='100'>"."</td>";

                    if ($d['stok']<5) {
                        echo "<td class='red'>".$d['stok']."</td>";
                    }else {
                        echo "<td>".$d['stok']."</td>";
                    }
                    
                    echo "<td>";
                    echo "<a href='edit.php?kode=".$d['kode']."'>Edit</a>";
                    echo "||";
                    echo "<a href='delete.php?kode=".$d['kode']."'>Hapus</a>";
                    echo "</td>";
        
                    echo "</tr>";
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
        <br>
    </div>
</body>

</html>