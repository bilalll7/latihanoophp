<?php

//buat class
//parent class
class Produk {
  //buat property
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlHalaman,
         $waktuMain;

  //buat method
  public function getLabel(){
    return "$this->penulis , $this->penerbit";
  }
   //buat consturctor
   public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }
  //buat method baru
  public function getInfoProduk(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
  
}
//buat inheritance bikin child baru dari parent 
//child class
class Komik extends Produk{
  public function getInfoProduk(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}
class Game extends Produk{
  public function getInfoProduk(){
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
    return $str;
  }
}
//buat class baru
class CetakInfoProduk {
  //buat method baru
  public function cetak( Produk $produk ){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}
//buat object
$produk1 = new Komik("Melawan Hati","Fiersa Besari","Master Media",40000,100,0);
//buat object
$produk2 = new Game("Mobile Legends", "Moonton","Moonton",50000,0,50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();

?>