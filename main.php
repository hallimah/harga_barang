<h2>Aplikasi Harga Barang</h2>
<hr>
<a href="tambah.php">Tambah Data</a>

<?php
include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}

$qry="select * from harga_barang";
$data = $koneksi->query($qry);
 ?>

<table border="1">
  <tr>
    <th>KODE </th>
    <th>NAMA BARANG</th>
    <th>HARGA</th>
  </tr>
  <?php

  if ($data -> num_rows <= 0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
  }else {
    while ($row = $data -> fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row["kode"]."</td>";
      echo "<td>".$row["nama_barang"]."</td>";
      echo "<td>".$row["harga"]."</td>";
      echo '<td> <a href ="edit-form.php?kode='.
        $row["kode"].'">EDIT</a>';
			echo '<td> <a href ="hapus.php?kode='.
	      $row["kode"].'">HAPUS</a>';
      echo "</tr>";
    }
  }
    ?>

</table>
