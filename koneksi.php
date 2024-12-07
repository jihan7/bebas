<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="skincare";
    
    ///memberi alamat koneksi
    $koneksi=mysqli_connect($host,$user,$pass,$db);

    //$koneksi = mysqli_connect("localhost","root","","skincare")


    //cek koneksi
    if(mysqli_connect_errno()){
        echo "koneksi ke database gagal : ".mysqli_connect_error();
    }

?>