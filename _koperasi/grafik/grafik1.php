<?php 
$con         = mysqli_connect("localhost", "root", "", "project");
$kecamatan   = mysqli_query($con, "SELECT kecamatan FROM tb_kecamatan");
$penerima    = mysqli_query($con, "SELECT penerima FROM tb_kecamatan");

include "../_header.php";
?>
<div class="row">
    <div class="col-lg-12">
        <h1> Grafik Data Penerima Dana Bantuan</h1>
            <h4>
                <small>Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
            </h4>
            </div>
            </div>
<div class="row">
    <div class="col-lg-12">
<div id="grafik" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
<?php
$con = mysqli_connect('localhost', 'root', '' ,'project');
if(mysqli_connect_error()) {
    echo mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM tb_kecamatan") or die (mysqli_error($con));

$rows = array();
while($r = mysqli_fetch_array($result)) {
    $row[0] = $r[1];
    $row[1] = $r[2];
    array_push($rows,$row);
}


mysqli_close($con);
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">

    Highcharts.chart('grafik', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Jumlah mitra binaan penerima dana bantuan tahun 2017'
    },
    subtitle: {
        text: 'Source: Dinas Koperasi dan UKM Kota Palembang'
    },
    xAxis: {
        categories: [},
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'jumlah penerima'
        },
        labels: {
            formatter: function () {
                return this.value / 1000;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' millions'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'kecamatan',
        data: [<?php while ($p = mysqli_fetch_array($penerima)) { echo '"' . $p['penerima'] . '",';}?>],
    }]
});

</script>