<!DOCTYPE html>
<html>
<head>
	<title>Toko_Imron</title>
</head>
<body>
 
	<h2>Toko komputer</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA Barang</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_toko where idBarang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>kode Barang</td>
					<td>
						<input type="hidden" name="id Barang" value="<?php echo $d['idBarang']; ?>">
						<input type="text" name="kode Barang" value="<?php echo $d['kodeBarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>nama Barang</td>
					<td><input type="text" name="namaBarang" value="<?php echo $d['namaBarang']; ?>"></td>
				</tr>
				<tr>
					<td>satuan Barang</td>
					<td><input type="number" name="satuanBarang" value="<?php echo $d['satuanBarang']; ?>"></td>
				</tr>
                <tr>
					<td>stok Barang</td>
					<td><input type="number" name="stok Barang" value="<?php echo $d['stokBarang']; ?>"></td>
				</tr>
                <tr>
					<td>harga Barang</td>
					<td><input type="text" name="harga Barang" value="<?php echo $d['hargaBarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>