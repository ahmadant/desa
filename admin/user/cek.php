<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$nama= $_POST['nama'];
	$user = $_POST['username'];
	$sandi = md5($_POST['password']); //md5 salah satu enkripsi untuk mengamankan data
	$level = $_POST['level'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO admin(nama,username,password,level) VALUES('$nama','$user','$sandi','$level')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:admin.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Ggal Menambah data</div>";
	}
?>