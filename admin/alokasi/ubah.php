<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id =$_POST['id_a'];
	$id_m= $_POST['id_m'];
	$alokasi = $_POST['alokasi'];
	$catatan= $_POST['catatan'];
	
	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "UPDATE alokasi SET id_m ='$id_m',
								alokasi ='$alokasi',
								catatan='$catatan',
								WHERE id_a='$id'";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:alokasi.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Merubah data</div>";
	}
?>