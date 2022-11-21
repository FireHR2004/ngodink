<?php

include_once("../koneksi.php"); //Koneksi

if (isset($_POST['update']))
{    
    $IdPrinter = $_POST['IdPrinter']; //Id Printer
    
    $NamaPrinter= $_POST['NamaPrinter']; //Nama
    $SpesifikasiPrinter= $_POST['SpesifikasiPrinter']; //Spek
    $HargaPrinter= $_POST['HargaPrinter']; //Harga
    
    $namaFile = $_FILES['berkas']['name'];
    $namaSementara = $_FILES['berkas']['tmp_name'];

    $dirUpload = "../img/post/";

    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        
    $result = mysqli_query($koneksi, "UPDATE printer_tb SET NamaPrinter='$NamaPrinter',SpesifikasiPrinter='$SpesifikasiPrinter',HargaPrinter='$HargaPrinter',image='$namaFile' WHERE IdPrinter=$IdPrinter");
    
    header("Location: dashboard.php"); //Dialokasikan ke halaman admin.php
}
?>

<?php
$IdPrinter = $_GET['IdPrinter']; //Mengambil IdPrinter
 
$result = mysqli_query($koneksi, "SELECT * FROM printer_tb WHERE IdPrinter=$IdPrinter"); //Mengambil data dari tabel printer_tb berdasarkan IdPrinter
 
while($Printer_data = mysqli_fetch_array($result)) //Perulangan
{
    $NamaPrinter = $Printer_data['NamaPrinter']; //Nama
    $SpesifikasiPrinter = $Printer_data['SpesifikasiPrinter']; //Spek
    $HargaPrinter = $Printer_data['HargaPrinter']; //Harga
}
?>
<html>
<head>    
    <title>Edit Printer</title>
</head>
 
<body>

    <?php 

        session_start(); //Sesi
        if($_SESSION['status']!="login"){ //Cek Sesi
            header("location:../index.php?pesan=Silahkan-Login-Terlebih-Dahulu");
        }

        if($_SESSION['username']!="admin"){ //Cek Sesi
            die("Anda bukan Admin");
        }

    ?>

    <a href="admin.php">Home</a>
    <br/><br/>
    
    <form name="update_printer" method="post" action="edit.php" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <div class="mb-3">
                    Preview: <img id="thumb" src="<?php echo "image/".$d['image']; ?>" width="100" height="100" />
                    <input class="form-control mt-3" type="file" id="image" name="berkas" value="<?php echo $d['image']; ?>" onchange="preview()">
        
                    <script>
                        function preview() {
                            thumb.src=URL.createObjectURL(event.target.files[0]);
                        }
                    </script>
                </div>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="NamaPrinter" value="<?php echo $NamaPrinter; ?>"></td>
            </tr>
            <tr> 
                <td>Spesifikasi</td>
                <td><input type="text" name="SpesifikasiPrinter" value="<?php echo $SpesifikasiPrinter; ?>"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="HargaPrinter" value="<?php echo $HargaPrinter; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="IdPrinter" value=<?php echo $_GET['IdPrinter'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>