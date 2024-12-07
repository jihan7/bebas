<?php
// koneksi database
include 'koneksi.php';
//menangkap data yang dikirim dari form

$ID = $_POST['ID'];
$nama_barang =$_POST['nama_barang'];
$merek =$_POST['merek'];
$stok =$_POST['stok'];

//menginput data ke database
mysqli_query($koneksi,"insert into databarang values('$ID','$nama_barang','$merek','$stok')");

//mengalihkan halaman kembali ke index
header("location:anggota.php");
?>