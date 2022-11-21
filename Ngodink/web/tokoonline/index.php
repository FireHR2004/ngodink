<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>WARUNGPEDIA</title>
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
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>

        <!-- body -->
    <div class="container">
        <?php
        include 'koneksi.php';
        $sql = mysqli_query($koneksi, "SELECT * FROM printer_tb");
        while ($data= mysqli_fetch_array($sql)){
        ?>
        <div class="card">  
            <img src="img/<?php echo $data['image']?>" alt="" class="card_header">
            <h3 class="card_info"><?php echo $data['NamaPrinter']?></h3>
            <p class="card_info"><?php echo $data['SpesifikasiPrinter']?></p>
            <h5 class="card_info">Rp. <?php echo $data['HargaPrinter']?></h5>
            <a href="tambah_cart.php?id=<?= $data['IdPrinter']; ?>"><button>Ad Cart</button></a>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>