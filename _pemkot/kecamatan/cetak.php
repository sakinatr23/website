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
width: 130px;
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
          Laporan Data Total Dana per Kecamatan <br> Mitra Binaan Program Peningkatan Ekonomi Kerakyatan Tahun 2017
    </div>

    <table  <table width="10px" border="1px" class="tabel" style="width: 210mm;">
        <tr>
          <th>No.</th>
              <th style="max-width: 5px;">Kecamatan</th>
              <th style="max-width: 10px;">Jumlah Penerima</th>
              <th style="max-width: 10px;">Jumlah Dana</th>
              <th style="max-width: 10px;">Total Dana</th>
          </tr>';
          $no = 1;
          $sql_kecamatan = mysqli_query($con, "SELECT * FROM tb_kecamatan") or die (mysqli_error($con));
          if (mysqli_num_rows($sql_kecamatan) > 0) { 
            while ($data = mysqli_fetch_object($sql_kecamatan)) 
              { 
            $content .= '
            <tr>
                          <td align="center">'.$no++.'</td>
                          <td style="max-width: 5px;">'.$data->kecamatan.'</td>
                          <td style="max-width: 10px;">'.$data->penerima.'</td>
                          <td style="max-width: 10px;">'.$data->jumlah_dana.'</td>
                          <td style="max-width: 10px;">'.$data->total_dana.'</td>
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
$html2pdf->Output('Laporan_total_dana.pdf');
?>