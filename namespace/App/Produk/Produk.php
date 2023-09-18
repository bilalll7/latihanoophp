<?php
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
?>