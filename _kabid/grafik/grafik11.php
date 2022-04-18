<?php 
include "../_header.php";
?>

<div class="row">
    <div class="col-lg-12">
        <h2> Pie Chart</h2>
            <h4>
                <small>Mitra Binaan Program Peningkatan Ekonomi Kerakyatan</small>
            </h4>
            </div>
            </div>
<div class="row">
    <div class="col-lg-12">

</div>
</div>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Pie Chart</title>
        <script type="text/javascript" src="../_assets/highcharts/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: true
                },
                title: {
                    text: 'Persentase Jumlah Penerima Dana Bantuan Mitra Binaan per Kecamatan Tahun 2017'
                },
                 subtitle: {
        text: 'Source: Dinas Koperasi dan UKM Kota Palembang 2017'
    },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';;
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            formatter: function() {
                                return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';;
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: []
                }]
            }
            
            $.getJSON("data.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });
            
            
            
        });   
        </script>
        <script src="../_assets/highcharts/highcharts.js"></script>
        <script src="../_assets/highcharts/exporting.js"></script>
    </head>
    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </body>
</html>

<?php include_once "../_footer.php"; ?>