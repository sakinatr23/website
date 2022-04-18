<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Edit Data Total Dana per Kecamatan</h1>
            <h4>
                <small>Calon Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                    </div>
            </h4> 
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_kecamatan = mysqli_query($con, "SELECT * FROM tb_kecamatan WHERE id_kecamatan = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_kecamatan);
                ?>
                    <form name="dana" action="proses.php" method="post">
                        <div class="form-group">
                           <label for="kecamatan">Kecamatan</label> 
                           <input type="hidden" name="id" value="<?=$data['id_kecamatan']?>">
                           <select  name="kecamatan" value="<?=$data['kecamatan']?>" id="kecamatan" class="form-control" required>
                            <option  value="">Pilih Kecamatan</option>
                            <option  value="Alang-Alang lebar">Alang-Alang Lebar</option>
                            <option  value="Bukit Kecil">Bukit Kecil</option>
                            <option  value="Gandus">Gandus</option>
                            <option  value="Ilir Barat I">Ilir Barat I</option>
                            <option  value="Ilir Barat II">Ilir Barat II</option>
                            <option  value="Ilir Timur I">Ilir Timur I</option>
                            <option  value="Ilir Timur II">Ilir Timur II</option>
                            <option  value="Ilir Timur III">Ilir Timur III</option>
                            <option  value="Jakabaring">Jakabaring</option>
                            <option  value="Kalidoni">Kalidoni</option>
                            <option  value="Kemuning">Kemuning</option>
                            <option  value="Kertapati">Kertapati</option>
                            <option  value="Plaju">Plaju</option>
                            <option  value="Sako">Sako</option>
                            <option  value="Seberang Ulu I">Seberang Ulu I</option>
                            <option  value="Seberang Ulu II">Seberang Ulu II</option>
                            <option  value="Sematang Borang">Sematang Borang</option>
                            <option  value="Sukarami">Sukarami</option>
                            </select>
                        </div>
                       <div class="form-group">
                            <label for="penerima">Jumlah Penerima</label>
                            <input type="" name="penerima" value="<?=$data['penerima']?>" class="form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_dana">Jumlah Dana</label>
                            <input type="" name="jumlah_dana" value="<?=$data['jumlah_dana']?>" class="form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                        </div>
                        <div class="form-group">
                            <label for="total_dana">Total Dana</label>
                            <input type="" name="total_dana" value="<?=$data['total_dana']?>" class="form-control"></td>
                        </div>
                        <div class="form-group pull-right">
                           <input type="submit" name="edit" value="simpan" class="btn btn-success">
                        </div>
                    </form>     
                </div>  
            </div> 
    </div>
<script>
    function startCalc(){
            interval = setInterval("calc()",1);
    }
    function calc(){
        valuepenerima = document.dana.penerima.value;
        valuejumlah_dana = document.dana.jumlah_dana.value;
        document.dana.total_dana.value = (valuepenerima * valuejumlah_dana ) ;
    }
    function stopCalc(){
        clearInterval(interval);
    }
</script> <!-- Menghitung otomatis -->

<?php include_once('../_footer.php'); ?>