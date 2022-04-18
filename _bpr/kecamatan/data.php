<?php include_once('../_header.php'); ?>

	<div class="box">
		<h1>Data Total Dana yang diterima per kecamatan</h1>
			<h4>
				<small>Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
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
							<th>Kecamatan</th>
							<th>Jumlah Penerima</th>
							<th>Jumlah Dana</th>
							<th>Total Dana</th>
							<th><i class="glyphicon glyphicon-cog"></i></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					$sql_kecamatan = mysqli_query($con, "SELECT * FROM tb_kecamatan") or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_kecamatan)) 
						{ ?>
							<tr>
								<td align="center">
									<input type="checkbox" name="checked[]"  class="check" value="<?=$data['id_kecamatan']?>">
								</td>
								<td><?=$no++?>.</td>
								<td><?=$data['kecamatan']?></td>
								<td><?=$data['penerima']?></td>
								<td><?=$data['jumlah_dana']?></td>
								<td><?=$data['total_dana']?></td>
								<td align="center">
									<a href="edit.php?id=<?=$data['id_kecamatan']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i>
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