<?php include_once('../_header.php'); ?>

	<div class="box">
		<h1>Data Tidak Lolos Verifikasi</h1>
			<h4>
				<small>Calon Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
				<div class="pull-right">
					<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
					<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
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
							<th>Kecamatan</th>
							<th>Kelurahan</th>
							<th>Keterangan</th>
							<th><i class="glyphicon glyphicon-cog"></i></th>	
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					$query = "SELECT * FROM tb_tidak_lolos
							  INNER JOIN tb_calon_mitra ON tb_tidak_lolos.id_calon = tb_calon_mitra.id_calon
							   INNER JOIN tb_kecamatan ON tb_tidak_lolos.id_kecamatan = tb_kecamatan.id_kecamatan
							  INNER JOIN tb_verifikasi ON tb_tidak_lolos.id_verifikasi = tb_verifikasi.id_verifikasi
					";
					$sql_tidak = mysqli_query($con, $query) or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_tidak)) 
						{ ?>
							<tr>
								<td align="center">
									<input type="checkbox" name="checked[]"  class="check" value="<?=$data['id_tl']?>">
								</td>
								<td><?=$no++?>.</td>
								<td><?=$data['nama']?></td>
								<td><?=$data['alamat_domisili']?></td>
								<td><?=$data['alamat_usaha']?></td>
								<td><?=$data['jenis_usaha']?></td>
								<td><?=$data['kecamatan']?></td>
								<td><?=$data['kelurahan']?></td>
								<td><?=$data['status']?></td>
								<td align="center">
									<a href="edit.php?id=<?=$data['id_tl']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i>
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
				<button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i>Hapus</button>
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