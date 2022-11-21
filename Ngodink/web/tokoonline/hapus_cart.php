<?php
session_start();
include_once('koneksi.php');  
$id = $_GET["id"];
unset($_SESSION["cart"][$id]);
header("location:cart.php");
?>