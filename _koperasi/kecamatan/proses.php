<?php
require_once "../_config/config.php";
// require "../_assets/libs/vendor/autoload.php";

// use Ramsey\Uuid\Uuid;
// use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
	$id = $_POST['id'];
	$kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
	$penerima = trim(mysqli_real_escape_string($con, $_POST['penerima']));
	$jumlah_dana = trim(mysqli_real_escape_string($con, $_POST['jumlah_dana']));
	$total_dana = trim(mysqli_real_escape_string($con, $_POST['total_dana']));
	mysqli_query($con, "INSERT INTO tb_kecamatan (id_kecamatan, kecamatan, penerima, jumlah_dana, total_dana) VALUES ('$id', '$kecamatan', '$penerima', '$jumlah_dana', '$total_dana')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
	$penerima = trim(mysqli_real_escape_string($con, $_POST['penerima']));
	$jumlah_dana = trim(mysqli_real_escape_string($con, $_POST['jumlah_dana']));
	$total_dana = trim(mysqli_real_escape_string($con, $_POST['total_dana']));
	mysqli_query($con, "UPDATE tb_kecamatan SET kecamatan = '$kecamatan', penerima = '$penerima', jumlah_dana = '$jumlah_dana', total_dana = '$total_dana' WHERE id_kecamatan ='$id'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}

?>