<?php
include_once"admin/config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alokasi</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- file css bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="hijau navbar-fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.php"><strong>I</strong>desa</a>
		<ul class="nav nav-pills">
			<li><a href="index.php">Home</a></li>
			<li><a href="dana.masuk.php">dana masuk</a></li>
			<li class="active"><a href="alokasi.php">alokasi</a></li>
			<li><a href="dana.keluar.php">dana keluar</a></li>
			<li><a href="lapor.php">Lapor</a></li>
			<span class="btn btn-info b ">login</span>
		</ul>
	</div>
</nav>
<div class="container">
	<div class="jumbotron alert-success">
		<h2><srong>Alokasi</srong></h2>
	</div>
<div class="row col-lg-12">	
			<table class="table table-responsive table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Sumber</th>
						<th>alokasi</th>
						<th>catatan</th>
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
					<?php
						$query = "SELECT * FROM alokasi";
						$exec = mysqli_query($konek,$query);
						$no=1;

						while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>
								<td><?=$no?></td>
								<td><?=$data['id_m']?></td>
								<td><?=$data['alokasi']?></td>
								<td><?=$data['catatan']?></td>
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
<?php
	include_once 'x/f.php';
?>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>