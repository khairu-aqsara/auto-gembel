var pusher_tradedata = false;
var pusher = new Pusher('a0dfa181b1248b929b11', {
    cluster: 'ap1',
    encrypted: true
});

function start_pusher_tradedata(){
pusher_tradedata = pusher.subscribe(parameter);
pusher_tradedata.bind('update', function(data) {
        live_harga(data);
        console.log(data)
    });

pusher_tradedata.bind('update_chart', function(data) {
  update_chartdata(data);
});
}
function live_harga(data)
{
    var last_price = data.last_price;
    var high_price = data._24h.high;
    var low_price = data._24h.low;
    var datax = data._24h;

    console.log(data)

    var change = parseFloat(Math.round((last_price - datax.low) / datax.low * 1000) / 10).toFixed(2);
    var warna = (change < 0) ? "text-danger" : "text-success";
    var icon = (change < 0) ? "<span class='glyphicon glyphicon-triangle-bottom'></span>" : "<span class='glyphicon glyphicon-triangle-top'></span>" ;

    $("#change").html("<div class='"+warna+"'>"+icon+" "+change+" %</div>");

    if(jenis == 'idr'){
        $("#last_price").text($.number(last_price));
        $("#low_price").text($.number(low_price));
        $("#high_price").text($.number(high_price));
    }else{
        $("#last_price").text(parseFloat(last_price/1e8).toFixed(8));
        $("#low_price").text(parseFloat(low_price/1e8).toFixed(8));
        $("#high_price").text(parseFloat(high_price/1e8).toFixed(8));
    }
}

var laste;
Highcharts.setOptions({
  global: {
    useUTC: false,
    timezoneOffset: 7*60
  },
  plotOptions: {
    series: {
      animation: false
    }
  },
  chart: {
    animation: false
  }
});

updateChart = function(){
var chart = $('#chartnya').highcharts();
chart.xAxis[0].setExtremes(Date.now()-86400*1000, Date.now());

}

function afterSetExtremes(e) {}

update_chartdata = function(data){
  var chart = $('#chartnya').highcharts();
  if(!data.chart.length){
    return;
  }

  var ohlc = [], volume = [], dataLength = data.chart.length;
  var chartData = data.chart;
  i = 0;
  for (i; i < dataLength; i += 1) {
    ohlc.push([chartData[i][0],chartData[i][1],chartData[i][2],chartData[i][3],chartData[i][4]]);
    volume.push([chartData[i][0],chartData[i][5]]);
  }
  chart.series[1].setData(volume,false);
  chart.series[0].setData(ohlc,false);
  chart.hideLoading();

  chart.redraw();
  chart.xAxis[0].setExtremes(Date.now()-86400*1000, Date.now());
}


$.post('https://indodax.com/api/chartdata/'+key+'', {start: Date.now()-86400*1000, end: Date.now()}, function (data) {
    var ohlc = [], volume = [], dataLength = data.chart.length;
    var chartData = data.chart;
    var groupingUnits = [['minute',[30]]];
    var maxDate = data.maxDate;
    var minDate = data.minDate;

    i = 0;
    for (i; i < dataLength; i += 1) {
        ohlc.push([chartData[i][0],chartData[i][1],chartData[i][2],chartData[i][3],chartData[i][4]]);
        volume.push([chartData[i][0],chartData[i][5]]);
    }

    $('#chartnya').highcharts('StockChart', {
        plotOptions: {
             candlestick: {
                color: '#E64217',
                upColor: '#1FC700',
            }
        },
        chart : {
            type: 'candlestick',
            zoomType: null,
            height: 350
        },
        navigator : {
            enabled: false,
            adaptToUpdatedData: false,
            series : {
                data : chartData
            }
        },
        scrollbar: {
            enabled: false,
            liveRedraw: false
        },
        title: {
        },
        rangeSelector : {
            buttonTheme: {
                visibility: 'hidden'
            },
            labelStyle: {
                visibility: 'hidden'
            },
            buttons: [
                {type: 'day',count: 1,text: '1d'},
            ],
            inputEnabled: false,
            selected : 0
        },
        xAxis : {
            events : {
                afterSetExtremes : afterSetExtremes
            },
            minRange: 3600 * 1000,
            'max': maxDate,
            'min': minDate
        },

        yAxis: [{
            labels: {
                align: 'right',
                x: -3
            },
            title: {
                text: 'Price'
            },
            height: '75%',
            lineWidth: 2
        }, {
            labels: {
                align: 'right',
                x: -3
            },
            title: {
                text: 'Vol'
            },
            top: '80%',
            height: '20%',
            offset: 0,
            lineWidth: 2
        }],
        series: [{
            cropThreshold: 0,
            id: key,
            type: 'candlestick',
            name: labelnya,
            data: ohlc,
            dataGrouping: {
                units: groupingUnits
            },
            tooltip: {
                valueDecimals: 0
            }
        }, {
            type: 'column',
            name: 'Volume',
            data: volume,
            yAxis: 1,
            dataGrouping: {
                units: groupingUnits
            },
            tooltip: {
                valueDecimals: 2
            }
        }],
        credits: {
            enabled: false
        },
        tooltip:{
            enabledIndicators: false
        },
        indicators: [{
            id: key,
            type: 'bb',
            params: {
                period: 20
            },
            showInLegend: false
        }],
        exporting: {
            buttons: {
                'contextButton': {
                    enabled:false
                }
            }
        }
    });
});

start_pusher_tradedata();
