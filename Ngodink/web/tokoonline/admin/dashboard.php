<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="logo">
            <h3><a href="index.php">WARUNGPEDIA</a></h3>             
        </div>

        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="history.php">History</a></li>
            <?php
            session_start();
            
            //pengecekan apakah di dalam session terdapat array username
            if(isset($_SESSION['username'])){
                if($_SESSION['username'] == 'admin'){
                    echo '
                    <li><a href="logout.php">Log Out</a></li>
                    ';
                }
            }else{
                echo '
                    <li><a href="login.php">Sign In</a></li>
                    ';
            }
            ?>
        </ul>
    </nav>
    <!-- body -->
    <?php
    include_once("../koneksi.php");
    $result = mysqli_query($koneksi, "SELECT * FROM printer_tb ORDER BY IdPrinter DESC");
    $transaksi = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY IdTransaksi ASC");
    if($_SESSION['status']!="login"){
        header('location:../login.php?pesan=Login -Terlebih-dahulu');
    }
    if($_SESSION['username']!="admin"){
        die("Anda Bukan Admin");
    }
    ?>
    <center><a href="tambah.php"><button style="width: 28vh;">Tambah Barang</button></a></center>
    <div class="container">
        <table border="1">
            <tr>
                <th>Image</th>
                <th>Nama</th> 
                <th>Spesifikasi</th> 
                <th>Harga</th> 
                <th>Opsi</th>
            </tr>
            <?php
            while($printer = mysqli_fetch_array($result)) { ?>      
            <tr>
                <td>
                    <center><img src='../img/post/<?= $printer['image']; ?>' alt= 'produk' style='width: 100px;'></center>
                </td>
                <td><?= $printer['NamaPrinter']; ?></td>
                <td><?= $printer['SpesifikasiPrinter']; ?></td>
                <td><?= $printer['HargaPrinter']; ?></td>    
                <td><a id="edit" href="edit.php?IdPrinter=<?=$printer['IdPrinter']; ?>">Edit</a> | <a id="delete" href="delete.php?IdPrinter=<?=$printer['IdPrinter']; ?>">Delete</a></td>
            </tr>        
            <?php
            }
            ?>
        </table> 
        <br>
    </div>
    <h3><center>Transaksi</center></h3>
    <div class="container">
        <table border="1">
            <tr>
                <th>No</th> 
                <th>Gambar</th>
                <th>Jumlah</th> 
                <th>Status</th> 
                <th>Opsi</th>
            </tr>
            <?php
            while($hasil = mysqli_fetch_object($transaksi)) { if($hasil->status == 1){?>      
            <tr>
                <td>
                    <center><img src='../img/post/<?= $printer['image']; ?>' alt= 'produk' style='width: 100px;'></center>
                </td>
                <td><?= $hasil->IdTransaksi; ?></td>
                <td><?= $hasil->Jumlah; ?></td>
                <td>Belum Terkonfirmasi</td>    
                <td><a href="dashboard.php?id=<?=$hasil->IdTransaksi?>">Konfirmasi Pesanan</a> | <a id="delete" href="delete.php?IdPrinter=<?=$printer['IdPrinter']; ?>">Delete</a></td>
            </tr>        
            <?php
                }
            }
            ?>
        </table> 
        <?php
        if(isset($_GET['id'])){
            include '../koneksi.php';

            $id = $_GET['id'];
            $status = 2;

            $query = "UPDATE transaksi SET status='$status' WHERE IdTransaksi='$id'";
            $run = mysqli_query($koneksi, $query);

            if($run){
                header('location:dashboard.php');
            }
        }
        ?>
    </div>
</body>
</html>
<style>
    table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 0.5rem 1rem;
}

td:nth-child(4) {
    text-align: center;
}

table #edit {
    color: green;
}

table #delete {
    color: red;
}
</style>