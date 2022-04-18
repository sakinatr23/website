ob_start();
<?php
include"../_config/config.php";
include "../_header.php"; 

$content =  '
<style type="text/css">
.tabel { width="500px" border-collapse:collapse; }
.tabel th {
padding:8px; 
background-color:#f60; 
color:#fff;
}
.tabel td {
word-wrap:break-word;
width: 90px;
}
</style>
';

$content .= '
<page>
    <table>
    <tr>
      <th rowspan="3"><img src="../_assets/logo.png"  style="width:120px;height:120px" /></th>
      <td align="center" style="width: 600px;"><font style="font-size: 20px"><br><b>PEMERINTAH KOTA PALEMBANG <br>
      DINAS KOPERASI DAN USAHA KECIL MENENGAH</b></font>
        <br><br>Jalan Merdeka No. 06 Palembang (30131) | Telp: (0711) 373208</td>
    </tr>
  </table>
  <hr>
<div style="padding:10px 0 5px 0; font-size:15px;" align="center">
          Laporan Daftar Data Mitra Binaan Program Peningkatan Ekonomi Kerakyatan
    </div>

    <table  <table width="10px" border="1px" class="tabel" style="width: 210mm;">
        <tr>
          <th>No.</th>
              <th style="max-width: 5px;">Nama</th>
              <th style="max-width: 5px;">Kecamatan</th>
              <th style="max-width: 10px;">Kelurahan</th>
              <th style="max-width: 10px;">Alamat Domisili</th>
              <th style="max-width: 10px;">Alamat Usaha</th>
              <th style="max-width: 10px;">Jenis Usaha</th>
          </tr>';
          $no = 1;
          $sql_mitra = mysqli_query($con, "SELECT * FROM tb_mitra
                INNER JOIN tb_kecamatan ON tb_mitra.id_kecamatan = tb_kecamatan.id_kecamatan") or die (mysqli_error($con));
          if (mysqli_num_rows($sql_mitra) > 0) { 
            while ($data = mysqli_fetch_object($sql_mitra)) 
              { 
            $content .= '
            <tr>
                          <td align="center">'.$no++.'</td>
                          <td style="max-width: 5px;">'.$data->nama.'</td>
                          <td style="max-width: 5px;">'.$data->kecamatan.'</td>
                          <td style="max-width: 10px;">'.$data->kelurahan.'</td>
                          <td style="max-width: 10px;">'.$data->alamat_domisili.'</td>
                          <td style="max-width: 10px;">'.$data->alamat_usaha.'</td>
                          <td style="max-width: 10px;">'.$data->jenis_usaha.'</td>
            </tr>
            ';
          }
        }


$content .= '

    </table>
</page>
';

require_once('../_assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
ob_end_clean();
$html2pdf->Output('Laporan_Mitra.pdf');
?>