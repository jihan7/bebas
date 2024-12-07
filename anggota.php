<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>SELAMAT DATANG PENLANGGAN</h2>
    <p>horeeeeee powerrrrrrr nicerrrrr</p>
    <h2>HUAAAAAAA</h2>
	<br/>
	<a href="tambah.php">+ tambah data barang</a>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>no</th>
			<th>nama barang</th>
			<th>merek</th>
			<th>stok</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from databarang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['merek']; ?></td>
				<td><?php echo $d['stok']; ?></td>
				<td>
				<a href="edit.php?ID=<?php echo $d['ID']; ?>">edit</a>
				<a href="hapus.php?ID=<?php echo $d['ID']; ?>">hapus</a></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>