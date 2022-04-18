<?php include_once('../_header.php'); ?>

	<div class="box">
		<h1>Data Calon Penerima Dana Bantuan</h1>
			<h4>
				<small>Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
				<div class="pull-right">
					<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
					<!-- <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> -->
				</div>
			</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="datatables"> 
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Kecamatan</th>
							<th>Alamat Domisili</th>
							<th>Alamat Usaha</th>
							<th>Jenis Usaha</th>
							<th><i class="glyphicon glyphicon-cog"></i></th>	
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					$query = "SELECT * FROM tb_calon_mitra
							  INNER JOIN tb_kecamatan ON tb_calon_mitra.id_kecamatan = tb_kecamatan.id_kecamatan
					";
					$sql_calon = mysqli_query($con, $query) or die (mysqli_error($con));
					if (mysqli_num_rows($sql_calon) > 0) { 
						while ($data = mysqli_fetch_object($sql_calon)) 
							{ ?>
							<tr>
							<td align="center"><?php echo $no++."."; ?></td>
							<td><?php echo " $data->nama"; ?></td>
	                        <td><?php echo " $data->kecamatan"; ?></td>
	                        <td><?php echo " $data->alamat_domisili"; ?></td>
	                        <td><?php echo " $data->alamat_usaha"; ?></td>
	                        <td><?php echo " $data->jenis_usaha"; ?></td>
	                 		<td class="text-center">
	                 				<!-- <a href="edit.php?id=<?php echo $data->id_calon; ?>" class="btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="del.php?id=<?php echo $data->id_calon; ?>" onclick="return confirm('Yakin akan Dihapus?')" class="btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a> -->
	                 		</td>
							</tr>

						<?php
					}	
					} else {
						echo "<tr><td clospan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
					}
					?>
					</tbody>
				</table>

			</div>	
</div>
<div class="pull-left">
	 <a href="cetak.php" target="_blank">
          <button class="btn btn-default"><i class="glyphicon glyphicon-print"></i>Cetak PDF</button>
</div>

<?php include_once('../_footer.php'); ?>