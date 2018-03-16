<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_a = $_POST['id_a'];
	$nama = $_POST['nama'];
	$rt_rw = $_POST['rt_rw'];
	$no_rumah = $_POST['no_rumah'];
	$pesan = $_POST['pesan'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO lapor(id_a,nama,rt_rw,no_rumah,pesan) VALUES('$id_a','$nama','$rt_rw','$no_rumah','$pesan')";
	$exec = mysqli_query($konek,$query);

	include_once"../config/alert.php";
?>