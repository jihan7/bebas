<?php 

include 'koneksi.php';
 

$ID = $_POST['ID'];
$nama_barang = $_POST['nama_barang'];
$merek = $_POST['merek'];
$stok = $_POST['stok'];
 
mysqli_query($koneksi,"UPDATE databarang set nama_barang='$nama_barang', merek='$merek', stok='$stok' where ID='$ID'");
 
header("location:anggota.php");
 
?>