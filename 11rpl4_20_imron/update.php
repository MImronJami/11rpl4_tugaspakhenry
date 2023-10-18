
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
 
$Kode = $_POST['kodeBarang'];
$Nama= $_POST['namaBarang'];
$Satuan = $_POST['satuanBarang'];
$Stok = $_POST['stokBarang'];
$Harga = $_POST['hargaBarang'];

// update data ke database
mysqli_query($koneksi,"update tb_toko set kodeBarang='$Kode', namaBarang ='$nama', satuanBarang='$Satuan', stokBarang = '$Stok', hargaBarang = '$Harga'  where idBarang='$id' ");

 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>