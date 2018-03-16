<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$sumber = $_POST['sumber'];
	$tgl_m = $_POST['tgl_m'];
	$jml_m= $_POST['jml_m'];
	$terbilang= $_POST['terbilang'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO anggaran_masuk(sumber,tgl_m,jml_m,terbilang) VALUES('$sumber','$tgl_m','$jml_m','$terbilang')";
	$exec = mysqli_query($konek,$query);

	include_once"../config/alert.php";
?>