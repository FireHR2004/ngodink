<?php 

include_once("koneksi.php");
 
$IdTransaksi = $_GET['IdTransaksi'];
 
$result = mysqli_query($koneksi, "DELETE FROM transaksi WHERE IdTransaksi=$IdTransaksi");
 
header("Location:order.php");

?>