<?php

$koneksi = mysqli_connect("localhost", "root", "", "e-comerce");

if(mysqli_connect_errno()){
    echo "disconected";
}mysqli_connect_error();

?>