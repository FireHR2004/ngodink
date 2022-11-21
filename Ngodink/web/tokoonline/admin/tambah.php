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
                    <li><a href="admin/logout.php">Log Out</a></li>
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
    <div class="container">
    <a href="dashboard.php"><button style="width: 28vh;">Back</button></a>
    <br>
    </div>
    <div class="container">
    <form action="tambah.php" method="POST" name="form1">
        <table width='50%' border='0'>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="NamaPrinter" require></td>
            </tr>
            <tr>
                <td>Spesifikasi</td>
                <td><input type="text" name="SpesifikasiPrinter"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="HargaPrinter"></td>
            </tr>
            <tr>
                <td>Upload Gambar</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td></td>
                <td><br><input type="submit" name="Submit" value="ADD" class="btn"></td>
            </tr>
        </table>
    </form>
    <?php        
        if(isset($_POST['Submit'])) {
            include_once("../koneksi.php");
            $NamaPrinter = $_POST['NamaPrinter'];
            $SpesifikasiPrinter = $_POST['SpesifikasiPrinter'];
            $HargaPrinter = $_POST['HargaPrinter'];
            $image = $_POST['image'];
            $IdUser = mysqli_insert_id($koneksi);
                    
            $result = mysqli_query($koneksi, "INSERT INTO printer_tb (NamaPrinter, SpesifikasiPrinter, HargaPrinter, image) VALUES('$NamaPrinter','$SpesifikasiPrinter','$HargaPrinter','$image')");
            
            header("location:dashboard.php");
        }
    ?>   
    </div>
</body>
</html>