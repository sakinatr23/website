<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM tb_calon_mitra WHERE id_calon = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>