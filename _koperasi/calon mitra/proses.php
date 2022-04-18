<?php
require_once "../_config/config.php";
// require "../_assets/libs/vendor/autoload.php";

/*use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;*/

if (isset($_POST['add'])) {
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
	$alamat_domisili = trim(mysqli_real_escape_string($con, $_POST['alamat_domisili']));
	$alamat_usaha = trim(mysqli_real_escape_string($con, $_POST['alamat_usaha']));
	$jenis_usaha = trim(mysqli_real_escape_string($con, $_POST['jenis_usaha']));
	mysqli_query($con, "INSERT INTO tb_calon_mitra (id_calon, nama, id_kecamatan, alamat_domisili, alamat_usaha, jenis_usaha) VALUES ('$id', '$nama', '$kecamatan', '$alamat_domisili', '$alamat_usaha', '$jenis_usaha')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
	$alamat_domisili = trim(mysqli_real_escape_string($con, $_POST['alamat_domisili']));
	$alamat_usaha = trim(mysqli_real_escape_string($con, $_POST['alamat_usaha']));
	$jenis_usaha = trim(mysqli_real_escape_string($con, $_POST['jenis_usaha']));
	mysqli_query($con, "UPDATE tb_calon_mitra SET nama = '$nama', id_kecamatan = '$kecamatan', alamat_domisili = '$alamat_domisili', alamat_usaha = '$alamat_usaha', jenis_usaha = '$jenis_usaha' WHERE id_calon = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>