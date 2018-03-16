<?php
$host = "localhost"; //server lokal karena pakai xampp
$user = "root"; //username untuk  akses MySQL/phpmyadmin
$pass = ""; //sandi untuk akses MySQL/phpmyadmin 
$dbnm = "danadesa"; //nama database

$konek = mysqli_connect($host,$user,$pass,$dbnm);

if(!$konek)
{
	die("gagal terhubung ke database".mysqli_connect_error());
}