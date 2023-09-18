<?php
class Contoh {
  public static $angka = 1;
  public static function halo(){
    return "Halo ". self::$angka++ ." Kali .<br>";
  }
}
echo Contoh::halo();
echo "<br>";
echo Contoh::halo();
?>