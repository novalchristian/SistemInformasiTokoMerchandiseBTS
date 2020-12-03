<?php
$id = $_GET['id'];
$idpesanan = $_GET['idpesanan'];
include 'config.php';

$result = mysqli_query($connect, "DELETE FROM peminjaman WHERE id_peminjaman=$idpesanan");

if($result){
header("Location: peminjaman.php?id=$id");
}
?>