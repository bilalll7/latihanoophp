<?php

//buat class
class Produk {
  //buat property
  public $judul = "judul",
         $penulis ="penulis",
         $penerbit ="penerbit",
         $harga = 1;
  //buat method
  public function getLabel(){
    return "$this->judul , $this->penulis";
  }
  
}
//buat object
$produk3 = new Produk();
//bisa menimpa isi dari property yg sudah di tulis dg menuliskan object->
$produk3->judul = "Sasuke";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Erlangga";
$produk3->harga = 2;

//buat object
$produk4 = new Produk();

$produk4->judul = "Mobile Legends";
$produk4->penulis = "Luminaire";
$produk4->penerbit = "Moonton";
$produk4->harga = 2500000;

echo "Komik : " . $produk3->getLabel();
echo "</br>";
echo "</br>";
echo "Game : " . $produk3->getLabel();
?>