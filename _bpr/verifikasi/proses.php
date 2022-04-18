<?php
require_once "../_config/config.php";
// require "../_assets/libs/vendor/autoload.php";

// use Ramsey\Uuid\Uuid;
// use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$alamat_domisili = trim(mysqli_real_escape_string($con, $_POST['alamat_domisili']));
	$alamat_usaha = trim(mysqli_real_escape_string($con, $_POST['alamat_usaha']));
	$jenis_usaha = trim(mysqli_real_escape_string($con, $_POST['jenis_usaha']));
	$hasil_verifikasi = trim(mysqli_real_escape_string($con, $_POST['hasil_verifikasi']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$status = trim(mysqli_real_escape_string($con, $_POST['status']));
	mysqli_query($con, "INSERT INTO tb_verifikasi (id_verifikasi, id_calon, hasil_verifikasi, tanggal, status) VALUES ('$id', '$nama,$alamat_domisili,$alamat_usaha,$jenis_usaha', '$hasil_verifikasi', '$tanggal', '$status')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$alamat_domisili = trim(mysqli_real_escape_string($con, $_POST['alamat_domisili']));
	$alamat_usaha = trim(mysqli_real_escape_string($con, $_POST['alamat_usaha']));
	$jenis_usaha = trim(mysqli_real_escape_string($con, $_POST['jenis_usaha']));
	$hasil_verifikasi = trim(mysqli_real_escape_string($con, $_POST['hasil_verifikasi']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$status = trim(mysqli_real_escape_string($con, $_POST['status']));
	mysqli_query($con, "UPDATE tb_verifikasi SET id_calon = '$nama,$alamat_domisili,$alamat_usaha,$jenis_usaha', hasil_verifikasi = '$hasil_verifikasi', tanggal = '$tanggal', status = '$status' WHERE id_verifikasi ='$id'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}

?>