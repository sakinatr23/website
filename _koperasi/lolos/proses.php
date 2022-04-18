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
	$kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
	$kelurahan = trim(mysqli_real_escape_string($con, $_POST['kelurahan']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	mysqli_query($con, "INSERT INTO tb_lolos (id_lolos, id_calon, id_kecamatan, kelurahan, id_verifikasi) VALUES ('$id', '$nama,$alamat_domisili,$alamat_usaha,$jenis_usaha', '$kecamatan', '$kelurahan', '$keterangan')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$alamat_domisili = trim(mysqli_real_escape_string($con, $_POST['alamat_domisili']));
	$alamat_usaha = trim(mysqli_real_escape_string($con, $_POST['alamat_usaha']));
	$jenis_usaha = trim(mysqli_real_escape_string($con, $_POST['jenis_usaha']));
	$kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
	$kelurahan = trim(mysqli_real_escape_string($con, $_POST['kelurahan']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	mysqli_query($con, "UPDATE tb_lolos SET id_calon = '$nama,$alamat_domisili,$alamat_usaha,$jenis_usaha', id_kecamatan = '$kecamatan', kelurahan = '$kelurahan', id_verifikasi = '$keterangan' WHERE id_lolos ='$id'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}

?>