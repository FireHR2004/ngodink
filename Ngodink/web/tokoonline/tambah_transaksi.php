<?php

session_start();
include("koneksi.php");

$id_user = $_SESSION['id_user'];

$cart = unserialize(serialize($_SESSION['cart']));

foreach($_SESSION["cart"] as $cart => $val) {
    $subtotal = $val['HargaPrinter']*$val['Jumlah']; 

    $total+=$subtotal;
}

$status = 1;
$Jumlah = 1;

$sql = "INSERT INTO transaksi (Jumlah, UserIdUser, status, Printer_tbIdPrinter, UserIdUser2) VALUES ('$total', '$id_user', '$status', '$cart' , '$id_user')";
$query = mysqli_query($koneksi, $sql);

unset($_SESSION['cart']);
header('Location: cart.php');

?>