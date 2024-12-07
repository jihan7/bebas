<?php
session_start();

    include 'koneksi.php';

    $name = $_POST['name'];
    $password = $_POST['password'];


    $data =mysqli_query($koneksi," SELECT * FROM admin WHERE name='$name' AND password='$password' ");

    $cek = mysqli_num_rows($data);

    if ($cek > 0){
        header("location:anggota.php");
    }else{
        header("location:index.php");
    }
?>