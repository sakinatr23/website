<?php include_once('../_header.php'); ?>

	<div class="box">
		<h1>Data Hasil Verifikasi</h1>
			<h4>
				<small>Calon Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
				<div class="pull-right">
					<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
					<!-- <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> -->
				</div>
			</h4>
			<form method="post" name="proses">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="datatables"> 
					<thead>
						<tr>
						<th>
								<center>
									<input type="checkbox" id="select_all" value="">
								</center>
							</th>	
							<th>No.</th>
							<th>Nama</th>
							<th>Alamat Domisili</th>
							<th>Alamat Usaha</th>
							<th>Jenis Usaha</th>
							<th>Hasil Verifikasi</th>
							<th>Tanggal</th>
							<th>Status</th>
							<th><i class="glyphicon glyphicon-cog"></i></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					$query = "SELECT * FROM tb_verifikasi
							  INNER JOIN tb_calon_mitra ON tb_verifikasi.id_calon = tb_calon_mitra.id_calon
					";
					$sql_verifikasi = mysqli_query($con, $query) or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_verifikasi)) 
						{ ?>
							<tr>
								<td align="center">
									<input type="checkbox" name="checked[]"  class="check" value="<?=$data['id_verifikasi']?>">
								</td>
								<td><?=$no++?>.</td>
								<td><?=$data['nama']?></td>
								<td><?=$data['alamat_domisili']?></td>
								<td><?=$data['alamat_usaha']?></td>
								<td><?=$data['jenis_usaha']?></td>
								<td><?=$data['hasil_verifikasi']?></td>
								<td><?=$data['tanggal']?></td>
								<td><?=$data['status']?></td>
								<td align="center">
									<!-- <a href="edit.php?id=<?=$data['id_verifikasi']?>" --><!--  class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i> -->
								</td>
								
							</tr>
					<?php
					}	
					?>
					</tbody>
				</table>
			</div>	
			</form>

			<div class="box pull-right">
				<!-- <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i>Hapus</button> -->
			</div>
</div>
<script>
	$(document).ready(function() {
		$('#select_all').on('click', function(){
			if (this.checked) {
				$('.check').each(function(){
					this.checked = true;
				})
			} else {
				$('.check').each(function(){
					this.checked = false;
				})
			}
		});

		$('.check').on('click', function() {
			if($('.check:checked').length == $('.check').length) {
				$('#select_all').prop('checked', true)
			} else {
				$('#select_all').prop('checked', false)
			}
		})
	})

function hapus() {
	var conf = confirm('yakin akan mengahpus data?');
	if (conf) {
		document.proses.action = 'del.php';
		document.proses.submit();
	}
	
}
</script>
<div class="pull-left">
	 <a href="cetak.php" target="_blank">
          <button class="btn btn-default"><i class="glyphicon glyphicon-print"></i>Cetak PDF</button>
</div>			
<?php include_once('../_footer.php'); ?>