<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Order</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="logo">
            <h3><a href="index.php">WARUNGPEDIA</a></h3>             
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="order.php">Order</a></li>
            <?php
            //pengecekan apakah di dalam session terdapat array username
            if(isset($_SESSION['username'])){
                if($_SESSION['username'] == 'admin'){
                    echo '
                    <li><a href="/admin/dashboard.php">Dashboard</a></li>
                    ';
                }else{
                    echo '
                    <li><a href="admin/logout.php">Log Out</a></li>
                    ';
                }
            }else{
                echo '
                    <li><a href="login.php">Sign In</a></li>
                    ';
            }
            ?>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>

    <?php
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == ''){

            }else if($_SESSION['username'] == 'admin'){
                die('anda bukan user');
            }
        }

        if($_SESSION['status']!="login"){
            header("location:login.php?pesan=Silahkan-Login-Terlebih-Dahulu");
        }


    ?>

    <div class="container">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Id Transaksi</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            <?php
                include ("koneksi.php");
                $id = $_SESSION['id_user'];
                $query = "SELECT * FROM transaksi WHERE transaksi.UserIdUser2 = '$id'";
                $result = mysqli_query($koneksi, $query);
                $no= 1;
                $total = 0;
                while ($transaksi = mysqli_fetch_object($result)) { if ($transaksi->status == 1) { 
            ?>
            <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $transaksi->IdTransaksi ?></td>
                <td><?= $transaksi->Jumlah ?></td>
                <td class="red">Belum Dikonfirmasi</td>
                <td>
                    <a href="hapus_order.php?IdTransaksi=<?= $transaksi->IdTransaksi ?>" onclick="return confirm('Yakin Hapus?')">Batal Order</a>
                </td>
                </tr>
            <?php } } ?>
            <?php
            $id = $_SESSION['id_user'];
            $query = "SELECT * FROM transaksi WHERE transaksi.UserIdUser2 = '$id'";
            $result = mysqli_query($koneksi, $query);
            $no = 1;
            $total =  0;

            while($transaksi = mysqli_fetch_object($result)){ if($transaksi->status == 2){

            ?>
            <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $transaksi->IdTransaksi ?></td>
                <td><?= $transaksi->Jumlah ?></td>
                <td class="green">Sudah Dikonfirmasi</td>
                <td>
                <!-- <a href="hapus_order.php?IdTransaksi=<?= $transaksi->IdTransaksi ?>" onclick="return confirm('Yakin Hapus?')">Batal Order</a> -->
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
<style>
    table {
    border-collapse: collapse;
    margin: 1rem 0;
}

th, td {
    padding: 0.5rem 1.5rem;
    text-align: center;
}

table a {
    color: red;
}

table a:hover {
    color: darkred;
}
</style>