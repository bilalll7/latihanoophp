<?php

interface InfoProduk {
  public function getInfoProduk();
}

//buat class
//parent class
abstract class Produk {
  //buat property
  protected $judul,
         $penulis,
         $penerbit,
         $harga,
         $diskon = 0;
// protected hanya bisa dipakai di class tertentu dan class turunan nya
// private hanya bisa dipakai di class tertentu sj

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
  //buat setter untuk bisa mengubah isi nya
  public function setJudul($judul){
    $this->judul = $judul;
  }
  //buat getter 
  public function getJudul(){
    return $this->judul;
  }
  public function setPenulis($penulis){
    $this->penulis = $penulis;
  }
  public function getPenulis(){
    return $this->penulis;
  }
  public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
  }
  public function getPenerbit(){
    return $this->penerbit;
  }
  public function setHarga($harga){
    $this->harga = $harga;
  }
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }
  public function getDiskon(){
    return $this->diskon;
  }
  //buat method baru

  abstract function getInfo();
 
  
}
//buat inheritance bikin child baru dari parent 
//child class
class Komik extends Produk implements InfoProduk{
  public $jmlHalaman;
  public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->jmlHalaman = $jmlHalaman;
  }
  public function getInfoProduk(){
    $str = "Komik :". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
    return $str;
  }
  public function getInfo(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}
class Game extends Produk implements InfoProduk{
  public $waktuMain;
  public function __construct($judul,$penulis,$penerbit,$harga,$waktuMain){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->waktuMain = $waktuMain;
  }
  
  public function getInfoProduk(){
    $str = "Game : ". $this->getInfo() ." - {$this->waktuMain} Jam.";
    return $str;
  }
  public function getInfo(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}
//buat class baru
class CetakInfoProduk {
  //buat method baru
  public $daftarProduk = array();
  public function tambahProduk(Produk $produk){
    $this->daftarProduk[] = $produk;
  }
  public function cetak(){
    $str = "DAFTAR PRODUK : <br>";

    foreach($this->daftarProduk as $p){
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}
//buat object
$produk1 = new Komik("Melawan Hati","Fiersa Besari","Master Media",40000,100);
//buat object
$produk2 = new Game("Mobile Legends", "Moonton","Moonton",50000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>