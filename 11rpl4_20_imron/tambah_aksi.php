<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Kode = $_POST['kodeBarang'];
$Nama= $_POST['namaBarang'];
$Satuan = $_POST['satuanBarang'];
$Stok = $_POST['stokBarang'];
$Harga = $_POST['hargaBarang'];
// menginput data ke database
mysqli_query($koneksi,"insert into tb_toko values('','$Kode','$Nama','$Satuan','$Stok','$Harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>