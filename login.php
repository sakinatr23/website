<!DOCTYPE html>
<html>
<head>
	<title>Login Aplikasi</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/flat-ui.css">
	<link rel="shortcut icon" href="logo.png">
</head>
<body style="overflow: hidden;">
<div class="container" style="width: 1000px; padding-top: 10px;">
	<div class="login">
		<div class="login-screen" style="width: 870px; background-color: #1ABC9C;">
			<div class="login-icon">
				<img src="img/icons/png/map.png" />
				<h7>SELAMAT DATANG DI HALAMAN LOGIN</h7>
			</div>
			
			<div class="login-form">
			<form action="" method="POST">
				<div class="form-group">
					<input type="text" name="user" class="form-control login-field" placeholder="Masukkan username" id="login-name" required autofocus />
					<label class="login-field-icon fui-user" form="login-name"></label>
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control login-field" placeholder="Masukkan Password" id="login-name" required autofocus />
					<label class="login-field-icon fui-lock" form="login-pass"></label>
				</div>
				<div class="form-group">
					<select name="level" class="form-control" data-toggle="select">
					<option value="">--Pilih Level --</option>
					<option value="ukm">Dinas Koperasi dan UKM</option>
					<option value="bpr">Bank Perkreditan Rakyat</option>
					<option value="pemkot">Pemerintah Kota</option>	
					<option value="kabid">Kabid Pemberdayaan Usaha Mikro</option>
					</select>
				</div>

				<input type="submit" name="login" value="Log in" class="btn btn-primary btn-lg btn-block" />
				
			</form>
			<?php
			session_start();
			include "koneksi.php";
			if (@$_POST['login']) {
				$user = mysqli_real_escape_string($db, $_POST['user']);
				$pass = mysqli_real_escape_string($db, $_POST['pass']);
				$level = mysqli_real_escape_string($db, $_POST['level']);
				if ($level == 'ukm') {
					$sql1 = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die ($db->error);
					$data1 = mysqli_fetch_array($sql1);
					$id = $data1[0];
					$cek1 = mysqli_num_rows($sql1);
					if ($cek1 > 0) {
						$_SESSION['ukm'] = $id;
						echo "<script>window.location='_koperasi';</script>";
					} else {
						echo "<script>alert('login gagal');</script>";
					}
			} else if ($level == 'bpr') {
					$sql1 = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die ($db->error);
					$data1 = mysqli_fetch_array($sql1);
					$id = $data1[0];
					$cek1 = mysqli_num_rows($sql1);
					if ($cek1 > 0) {
						$_SESSION['bpr'] = $id;
						echo "<script>window.location='_bpr';</script>";
					} else {
						echo "<script>alert('login gagal');</script>";
					}
			} else if ($level == 'pemkot') {
					$sql1 = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die ($db->error);
					$data1 = mysqli_fetch_array($sql1);
					$id = $data1[0];
					$cek1 = mysqli_num_rows($sql1);
					if ($cek1 > 0) {
						$_SESSION['bpr'] = $id;
						echo "<script>window.location='_pemkot';</script>";
					} else {
						echo "<script>alert('login gagal');</script>";
					}
			} else if ($level == 'kabid') {
					$sql1 = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die ($db->error);
					$data1 = mysqli_fetch_array($sql1);
					$id = $data1[0];
					$cek1 = mysqli_num_rows($sql1);
					if ($cek1 > 0) {
						$_SESSION['kabid'] = $id;
						echo "<script>window.location='_kabid';</script>";
					} else {
						echo "<script>alert('login gagal');</script>";
					}
			}
			}
			?>
			</div>
		</div>		
	</div>	
</div>

<script src="js/jquery.min.js"></script>
<script src="js/flat-ui.js"></script>
<script src="js/application.js"></script>
</body>
</html>
