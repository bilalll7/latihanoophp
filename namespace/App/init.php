<?php
// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/CetakInfoProduk.php';
// require_once 'App/Produk/User.php';
// require_once 'App/Service/User.php';

spl_autoload_register(function( $class ){
  //App\Produk\User = ["App","Produk","User"]
  //explode untuk memisahkan string dengan karakter tertentu menjadi array
  $class = explode('\\', $class);
  $class = end($class);
  require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function( $class ){
  $class = explode('\\', $class);
  $class = end($class);
  require_once 'Service/' . $class . '.php';
});

?>