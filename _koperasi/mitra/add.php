<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1> Tambah Data Mitra Binaan</h1>
            <h4>
                <small>Program Peningkatan Ekonomi Kerakyatan</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                    </div>
            </h4> 
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                           <label for="nama">Nama</label> 
                           <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label> 
                            <select  name="kecamatan" id="kecamatan" class="form-control" required>
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
                            <input type="text" name="kelurahan" id="kelurahan" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label for="alamat_domisili">Alamat Domisili</label> 
                            <textarea name="alamat_domisili" id="alamat_domisili" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="alamat_usaha">Alamat Usaha</label> 
                            <textarea name="alamat_usaha" id="alamat_usaha" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_usaha">Jenis Usaha</label> 
                            <input type="text" name="jenis_usaha" id="jenis_usaha" class="form-control" required>
                        </div>
                        <div class="form-group pull-right">
                           <input type="submit" name="add" value="simpan" class="btn btn-success">
                        </div>
                    </form>     
                </div>  
            </div> 
    </div>

<?php include_once('../_footer.php'); ?>