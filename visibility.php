<?php

//buat class
//parent class
class Produk {
  //buat property
  public $judul,
         $penulis,
         $penerbit;
// protected hanya bisa dipakai di class tertentu dan class turunan nya
  protected $diskon = 0;
// private hanya bisa dipakai di class tertentu sj
  private $harga;

  //buat method
  public function getLabel(){
    return "$this->penulis , $this->penerbit";
  }
   //buat consturctor
   public function __construct($judul,$penulis,$penerbit,$harga){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
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
  public $jmlHalaman;
  public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->jmlHalaman = $jmlHalaman;
  }
  public function getInfoProduk(){
    $str = "Komik :". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}
class Game extends Produk{
  public $waktuMain;
  public function __construct($judul,$penulis,$penerbit,$harga,$waktuMain){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->waktuMain = $waktuMain;
  }
  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }
  public function getInfoProduk(){
    $str = "Game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam.";
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
$produk1 = new Komik("Melawan Hati","Fiersa Besari","Master Media",40000,100);
//buat object
$produk2 = new Game("Mobile Legends", "Moonton","Moonton",50000,50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();
echo "</hr>";
echo "</br>";
$produk2->setDiskon(10);
echo $produk2->getHarga();

?>