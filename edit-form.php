<h2>Fomrmulir Edit Harga Barang</h2>
<hr>
<form action="update.php" method="POST">
<?php
include"koneksi.php";
$koneksiObj= new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}

$qry= "select * from harga_barang where kode='" .
	$_GET["kode"]."'";
$data=$koneksi->query($qry);

if($data->num_rows <=0){
	echo "mas/mba datanya diisi seseuai prosedur ya...";
}else {
	while ($hasil =$data->fetch_assoc()) {
		global $namaBarang;
		global $harga;
		$namaBarang= $hasil["nama_barang"];
		$harga= $hasil["harga"];
	}
}
?>

<table>
<tr>

    <td>KODE </td>
    <td>
    :<input type="text" name="kode"readonly="true"
	value=<?php echo $_GET["kode"]; ?>></td>
</tr>
<tr>
    <td>NAMA BARANG</td>
    <td>
    :<input type="text" name="namaBarang"
	value=<?php echo $namaBarang; ?>></td>
</tr>
<tr>
    <td>HARGA</td>
    <td>: <input type ="text" name="harga"
	value=<?php echo $harga;?>></td>
</tr>
<tr>
    <td><input type="submit" value="simpan"></td>
<tr>
</table>
</form>
