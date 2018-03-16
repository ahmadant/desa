<?php
include_once"../config/config.php";
	//dapatkan data id user yang akan dihapus dari link hapus dengan parameter id
	$id = $_GET['id'];
	
	//menghapus datanya 
	$query = "DELETE FROM admin WHERE id='$id'";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:admin.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Menghapus data</div>";
	}
?>