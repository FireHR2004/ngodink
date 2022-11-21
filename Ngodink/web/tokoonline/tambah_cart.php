<?php  
   
 session_start();  
   
 include_once("koneksi.php");  
   
 $id = $_GET["id"];  
   
 $sql = "SELECT * FROM printer_tb WHERE IdPrinter =".$id;  
 $query = mysqli_query($koneksi, $sql);  
 $printer = mysqli_fetch_object($query);  
   
 $_SESSION["cart"][$id] = [  
   "NamaPrinter" => $printer->NamaPrinter,  
   "SpesifikasiPrinter" => $printer->SpesifikasiPrinter,  
   "HargaPrinter" => $printer->HargaPrinter,  
   "Jumlah" => 1  
 ];  
   
 header("location:cart.php");  
   
 ?>