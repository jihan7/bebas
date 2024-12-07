<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$ID = $_GET['ID'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from databarang where id='$ID'");
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
 
?>