<!DOCTYPE html>
<html>
<head>
	<title>TokoImron</title>
</head>
<body>
 
	<h2>Toko Komputer</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Barang</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Barang</td>
				<td><input type="text" name="kodeBarang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namaBarang"></td>
			</tr>
			<tr>
				<td>satuan Barang</td>
				<td><input type="number" name="satuanBarang"></td>
			</tr>
            <tr>
				<td>stok Barang</td>
				<td><input type="number" name="stokBarang"></td>
			</tr>
            <tr>
				<td>Harga Barang</td>
				<td><input type="text" name="hargaBarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>

