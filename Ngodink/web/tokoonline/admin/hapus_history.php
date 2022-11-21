<?php 
    
    include_once('../koneksi.php');

    $IdTransaksi = $_GET['IdTransaksi'];
    
    $hasil = mysqli_query($koneksi, "DELETE FROM transaksi WHERE IdTransaksi=$IdTransaksi");
    
    header("location:history.php");
    
?>