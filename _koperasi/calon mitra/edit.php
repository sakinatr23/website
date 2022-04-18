<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1> Data Calon Mitra Binaan</h1>
            <h4>
                <small>Edit Data</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                    </div>
            </h4> 
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id = @$_GET['id'];
                    $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra WHERE id_calon = '$id'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql_calon);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                           <label for="nama">Nama</label> 
                           <input type="hidden" name="id"  value="<?=$data['id_mitra']?>">
                           <input type="text" name="nama" id="nama" value="<?=$data['nama']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label> 
                            <select  name="kecamatan" id="kecamatan" value="<?=$data['kecamatan']?>" class="form-control" required>
                          <option  value="">--Pilih Kecamatan--</option>
                            <?php
                            $sql_kecamatan = mysqli_query($con, "SELECT * FROM tb_kecamatan") or die (mysqli_error($on));
                            while ($data_kecamatan = mysqli_fetch_array($sql_kecamatan)) {
                                echo '<option value="'.$data_kecamatan['id_kecamatan'].'">'.$data_kecamatan['kecamatan'].'</option>';
                            }
                            ?>
                            </select>
                            </div>
                         <div class="form-group">
                            <label for="alamat_domisili">Alamat Domisili</label> 
                            <textarea name="alamat_domisili" id="alamat_domisili" class="form-control" required><?=$data['alamat_domisili']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="alamat_usaha">Alamat Usaha</label> 
                            <textarea name="alamat_usaha" id="alamat_usaha" class="form-control" required><?=$data['alamat_usaha']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_usaha">Jenis Usaha</label> 
                            <input type="text" name="jenis_usaha" id="jenis_usaha" value="<?=$data['jenis_usaha']?>" class="form-control" required>
                        </div>
                        <div class="form-group pull-right">
                           <input type="submit" name="edit" value="simpan" class="btn btn-success">
                        </div>
                    </form>     
                </div>  
            </div> 
    </div>

<?php include_once('../_footer.php'); ?>