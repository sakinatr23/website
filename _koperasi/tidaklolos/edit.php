<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Edit Data</h1>
            <h4>
                <small>Program Peningkatan Ekonomi Kerakyatan</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                    </div>
            </h4> 
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_tidak = mysqli_query($con, "SELECT * FROM tb_tidak_lolos WHERE id_tl = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_tidak);
                ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                           <label for="nama">Nama</label> 
                           <input type="hidden" name="id" value="<?=$data['id_verifikasi']?>">
                            <select  name="nama" id="nama" value="<?=$data['nama']?>" class="form-control" required>
                             <option  value="">--Nama--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($on));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['nama'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="kecamatan">Kecamatan</label> 
                            <select  name="kecamatan" id="kecamatan" value="<?=$data['kecamatan']?>" class="form-control" required>
                            <option  value="">--Pilih Kecamatan--</option>
                            <?php
                            $sql_kecamatan = mysqli_query($con, "SELECT * FROM tb_kecamatan") or die (mysqli_error($con));
                            while ($data_kecamatan = mysqli_fetch_array($sql_kecamatan)) {
                                echo '<option value="'.$data_kecamatan['id_kecamatan'].'">'.$data_kecamatan['kecamatan'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label> 
                            <input type="text" name="kelurahan" id="kelurahan" value="<?=$data['kelurahan']?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_domisili">Alamat Domisili</label> 
                             <select  name="alamat_domisili" id="alamat_domisili" value="<?=$data['alamat_domisili']?>" class="form-control" required>
                             <option  value="">--Alamat Domisili--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($on));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_kecamatan['id_calon'].'">'.$data_calon['alamat_domisili'].'</option>';
                            }
                            ?>
                            </select>
                            </div>
                         <div class="form-group">
                           <label for="alamat_usaha">Alamat Usaha</label> 
                           <input type="hidden" name="id" value="<?=$data['id_verifikasi']?>">
                            <select  name="alamat_usaha" id="alamat_usaha" value="<?=$data['alamat_usaha']?>" class="form-control" required>
                             <option  value="">--Alamat Usaha--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($on));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['alamat_usaha'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_usaha">Jenis Usaha</label>
                             <select  name="alamat_usaha" id="alamat_usaha" value="<?=$data['jenis_usaha']?>" class="form-control" required>
                            <option  value="">--Jenis Usaha--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($on));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['jenis_usaha'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="keterangan">Keterangan</label> 
                            <select  name="keterangan" id="keterangan" value="<?=$data['keterangan']?>" class="form-control" required>
                            <option  value="">--Keterangan--</option>
                            <?php
                            $sql_verifikasi = mysqli_query($con, "SELECT * FROM tb_verifikasi") or die (mysqli_error($con));
                            while ($data_verifikasi = mysqli_fetch_array($sql_verifikasi)) {
                                echo '<option value="'.$data_verifikasi['id_verifikasi'].'">'.$data_verifikasi['status'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group pull-right">
                           <input type="submit" name="edit" value="simpan" class="btn btn-success">
                        </div>
                    </form>     
                </div>  
            </div> 
    </div>

<?php include_once('../_footer.php'); ?>