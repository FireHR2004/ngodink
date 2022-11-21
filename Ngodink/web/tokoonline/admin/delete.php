<?php
    include_once("../koneksi.php");
    
    $IdPrinter = $_GET['IdPrinter'];
    
    $result = mysqli_query($koneksi, "DELETE FROM printer_tb WHERE IdPrinter=$IdPrinter");
    
    header("Location:dashboard.php");
?>