<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Chart</title>
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
            session_start();
            
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
            <li><a href="cart.php">Chart</a></li>
        </ul>
    </nav>

    <!-- body -->
    
    <div class="container">
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

        if(!empty($_SESSION["cart"])) {
        ?>
        <table border="1" cellpadding="3">
            <tr>
                <th> No </th>
                <th> Gambar </th>
                <th> Nama Barang </th>
                <th> Spesifikasi </th>
                <th> Harga </th>
                <th> Jumlah </th>
                <th> Total </th>
                <th> Opsi </th>
            </tr>
            <?php
                include 'koneksi.php';
                $no= 1;
                $total = 0;

                $cart = unserialize(serialize($_SESSION['cart']));

                foreach($_SESSION["cart"] as $cart => $val) {
                    $subtotal = $val['HargaPrinter']*$val['Jumlah'];
                ?>
            <tr>
                <td><?php echo $no++; ?>.</td>
                <td><img src="img/post<?php echo $val['image']; ?>" alt=""></td>
                <td><?php echo $val['NamaPrinter']; ?></td>
                <td><?php echo $val['SpesifikasiPrinter']; ?></td>
                <td>Rp. <?php echo $val['HargaPrinter']; ?></td>
                <td><?php echo $val['Jumlah']; ?></td>
                <td><?php echo $subtotal; ?></td>
                <td>
                    <a href="hapus_cart.php?id=<?php echo $cart; ?>" style="text-decoration:none; color:red; font_family:sans-serif;">Batal</a>
                </td>
            </tr>
            <?php
            $total+=$subtotal;
            }
            ?>
            <tr>
                <th colspan="5">Total Pemblanjaan</th>
                <th><?php echo $total; ?></th>
                <th></th>
            </tr>
        </table>
        <a id="beli" href="tambah_transaksi.php"><button>Checkout</button></a>
    </div>
    <?php
    } else {
        echo "<h2 style='font-weight: 600; text-align: center;'>Keranjang Kamu masih kosong!</h2>";
    }
    ?>
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
   

   
 .footer {  
   text-align: center;  
   font-size: 13px;  
   padding: 1rem 0;  
   color: #1d1d1d;  
 }  
   
 input {  
   width: 100%;  
 }
</style>