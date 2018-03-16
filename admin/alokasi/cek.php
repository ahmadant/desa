<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_m = $_POST['id_m'];
	$alokasi = $_POST['alokasi'];
	$catatan= $_POST['catatan'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO alokasi(id_m,alokasi,catatan) VALUES('$id_m','$alokasi','$catatan')";
	$exec = mysqli_query($konek,$query);

	include_once"../config/alert.php";
?>