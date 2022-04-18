var options = {
    chart: {
        renderTo: 'container',
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false
    },
    title: {
        text: 'Jumlah Penerima Dana Bantuan per Kecamatan'
    },
    tooltip: {
        formatter: function() {
            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
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
                    return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                }
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Kecamatan',
        data: []
    }]
}