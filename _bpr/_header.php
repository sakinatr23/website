<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PEMERINTAH KOTA PLG</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/dataTables/datatables.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/_assets/logo.png">

</head>
<body>
<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
 <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
 <script src="<?=base_url('_assets/dataTables/datatables.min.js')?>"></script>
 <script type="text/javascript">
     $(document).ready(function(){
        $('#datatables').DataTable();
     })
 </script>
 <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>Kota Palembang</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('index.php')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('mitra/data.php')?>">Data Penerima Bantuan</a>
                </li>
                <li>
                    <a href="<?=base_url('calon mitra/data.php')?>"">Data Calon Mitra Binaan</a>
                </li>
                <li>
                    <a href="<?=base_url('verifikasi/data.php')?>">Data Hasil Verifikasi</a>
                </li>
                <li>
                    <a href="<?=base_url('lolos/data.php')?>">Mitra Binaan Lolos</a>
                </li>
                <li>
                    <a href="<?=base_url('tidaklolos/data.php')?>">Mitra Binaan Tidak Lolos </a>
                </li>
                <li>
                    <a href="<?=base_url('../logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">

