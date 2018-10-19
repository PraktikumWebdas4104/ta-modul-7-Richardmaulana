<?php

	include 'koneksi.php';
	$nim = $_GET['nim'];

	$qry = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim=$nim");
	echo "Selamat Data Berhasil Dihapus ";
	echo "<a href='lihatdata.php'>Lihat Data !.</a>";

?>