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
   //buat consturctor
   public function __construct($judul,$penulis,$penerbit,$harga){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  
  
}
//buat object
$produk1 = new Produk("Melawan Hati","Fiersa Besari","Master Media",40000);
//buat object
$produk2 = new Produk("Mobile Legends", "Moonton","Moonton",50000);

//cetak
echo "Komik : " . $produk1->getLabel();
echo "</br>";
echo "</br>";
echo "Game : " . $produk2->getLabel();
?>