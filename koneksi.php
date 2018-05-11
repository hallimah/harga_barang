<?php
class Koneksi{
  private $server="localhost";
  private $username="dev";
  private $password = "qwertyuiop";
  private $db = "toko";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
