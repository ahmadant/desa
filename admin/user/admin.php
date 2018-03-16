<?php
include_once"../config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini digunakan untuk memanggil file css dari bootstrap -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
	<!-- ini untuk brand/logo dan menu -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Mundak.in</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="komoditas.php">Komoditas</a></li>
					<li><a href="pasar.php">Pasar</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
		<div class="jumbotron alert-info">
			<h2>Data User ! Kenapa biar gede aja</h2>
		</div>
		<!--Tombol buat nambah data-->
		<p>
			<a href="tambah.php" class="btn btn-primary">Tambah User</a>
		</p>

		<div class="row col-sm-12 col-md-6">	
			<table class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
					<?php
						$query = "SELECT * FROM admin ORDER BY username";
						$exec = mysqli_query($konek,$query);
						$no=1;

						while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>
								<td><?=$no?></td>
								<td><?=$data['nama']?></td>
								<td><?=$data['username']?></td>
								<td><?=$data['level']?></td>
								<td>
									<a href="edit.php?id=<?=$data['id']?>" class="btn btn-success">Edit</a>
									<a href="hapus.php?id=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
							<?php
						$no++;	
						}
					?>
					<!-- Cuma sampai disini kok-->
				</tbody>
			</table>
		</div>
	</div>
	<!-- penutup isi -->

	<!-- bagian bawah -->
	<footer>
		<p class="text-center">
			Copyright &copy; 2017 AkuSaya
		</p>
	</footer>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>