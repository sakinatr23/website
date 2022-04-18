
<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1> Tambah Data Hasil Verifikasi</h1>
            <h4>
                <small>Calon Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                    </div>
            </h4> 
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                           <label for="nama">Nama</label> 
                          <select  name="nama" id="nama" class="form-control" required>
                            <option  value="">--Nama--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($con));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['nama'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_domisili">Alamat Domisili</label> 
                            <select  name="alamat_domisili" id="alamat_domisili" class="form-control" required>
                            <option  value="">--Alamat Domisili--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($con));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['alamat_domisili'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_usaha">Alamat Usaha</label> 
                            <select  name="alamat_usaha" id="alamat_usaha" class="form-control" required>
                            <option  value="">--Alamat Usaha--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($con));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['alamat_usaha'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_usaha">Jenis Usaha</label> 
                            <select  name="jenis_usaha" id="jenis_usaha" class="form-control" required>
                            <option  value="">--Jenis Usaha--</option>
                            <?php
                            $sql_calon = mysqli_query($con, "SELECT * FROM tb_calon_mitra") or die (mysqli_error($con));
                            while ($data_calon = mysqli_fetch_array($sql_calon)) {
                                echo '<option value="'.$data_calon['id_calon'].'">'.$data_calon['jenis_usaha'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hasil_verifikasi">Hasil Verifikasi</label> 
                            <textarea name="hasil_verifikasi" id="hasil_verifikasi" class="form-control" required></textarea>
                        </div>
                         <div class="form-group">
                            <label class="control-label" for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal">
                        </div>
                         <div class="form-group">
                            <label for="status">Status</label> 
                            <select  name="status" class="form-control" required>
                            <option  value="">---Status -----</option>
                            <option  value="Lolos">Lolos</option>
                            <option  value="Tidak Lolos">Tidak Lolos</option>
                        </div>
                        <div class="form-group pull-right">
                           <input type="submit" name="add" value="simpan" class="btn btn-success">
                        </div>
                    </form>     
                </div>  
            </div> 
    </div>

<?php include_once('../_footer.php'); ?>