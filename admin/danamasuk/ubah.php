<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id =$_POST['id_m'];
	$sumber = $_POST['sumber'];
	$tgl_m = $_POST['tgl_m'];
	$jml_m = $_POST['jml_m'];
	$terbilang = $_POST['terbilang'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "UPDATE anggaran_masuk SET sumber ='$sumber',
								tgl_m ='$tgl_m',
								jml_m='$jml_m',
								terbilang ='$terbilang'
								WHERE id_m='$id'";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:dana.masuk.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Merubah data</div>";
	}
?>