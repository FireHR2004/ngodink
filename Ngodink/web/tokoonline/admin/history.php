<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>History</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="logo">
            <h3><a href="dashboard.php">WARUNGPEDIA</a></h3>             
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

    <?php
    include_once("../koneksi.php");

    $transaksi = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY IdTransaksi ASC");

    if($_SESSION['status']!="login"){
        header('location:../login.php?pesan=Login -Terlebih-dahulu');
    }
    if($_SESSION['username']!="admin"){
        die("Anda Bukan Admin");
    }
    ?>
    <h2><center>RIWAYAT TRANSAKSI</center></h2>
    <div class="container">
        <table width='80%' border=1>
            <tr>
                <th>No</th> 
                <th>Jumlah</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            <?php  
            while($hasil = mysqli_fetch_object($transaksi)) { if ($hasil->status == 2) { ?>
                <tr>
                <td><?= $hasil->IdTransaksi ?></td>
                <td><?= $hasil->Jumlah ?></td>
                <td class="text-center">Sudah Konfirmasi</td>
                <td><a href="hapus_history.php?IdTransaksi=<?= $hasil->IdTransaksi ?>">Hapus</a></td>
                </tr>   
            <?php
            } }
            ?>
        </table>
    </div>
</body>
</html>