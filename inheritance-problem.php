<?php

//buat class
class Produk {
  //buat property
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlHalaman,
         $waktuMain,
         $tipe;

  //buat method
  public function getLabel(){
    return "$this->penulis , $this->penerbit";
  }
   //buat consturctor
   public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain,$tipe){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }
  public function getInfoProduk(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= "- {$this->jmlHalaman} Halaman.";
    }else if ($this->tipe == "Game") {
      $str .= "- {$this->waktuMain} Jam.";
    }
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
$produk1 = new Produk("Melawan Hati","Fiersa Besari","Master Media",40000,100,0,"Komik");
//buat object
$produk2 = new Produk("Mobile Legends", "Moonton","Moonton",50000,0,50,"Game");

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();

?>