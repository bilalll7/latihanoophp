<?php
require_once 'App/init.php';
//buat object
$produk1 = new Komik("Melawan Hati","Fiersa Besari","Master Media",40000,100);
//buat object
$produk2 = new Game("Mobile Legends", "Moonton","Moonton",50000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
?>