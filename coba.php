<?php
//membuat fungsi
function menampilkan(){
    echo "Hello world\n";

}
function pergi(){
    echo "saya pamit\n";
}

menampilkan();
pergi();
//tidak mengembalikan nilai
function penjumlahan($angka1,$angka2): void{
    $jumlah = $angka1+$angka2;
    echo "hasil penjumlahan : $jumlah";
}

penjumlahan(angka1:10,angka2:20);
?>
