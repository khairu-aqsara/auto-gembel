$(document).ready(function(){
    var pusher_tradedata = false;
    var pusher = new Pusher('a0dfa181b1248b929b11', {
        cluster: 'ap1',
        encrypted: true
    });

    start_pusher_tradedata();

    function start_pusher_tradedata(){
		pusher_tradedata = pusher.subscribe('marketsummary');
		pusher_tradedata.bind('update', function(data) {
            set_harga(data.prices,data.prices_24h,data.volumes);
		});
    }

    function set_harga(harga,harga24,volume)
    {
        console.log(harga);
        var i=0;
        $.each(harga, function(key,value){
            var persen = (((value-harga24[key]) / harga24[key] * 1000) / 10);
            var jml_persen = parseFloat(persen).toFixed(1);
            var vol = key.substr(0,3);
            var warna = (jml_persen < 0) ? "text-danger" : "text-success";
            var icon = (jml_persen < 0) ? "<span class='glyphicon glyphicon-triangle-bottom'></span>" : "<span class='glyphicon glyphicon-triangle-top'></span>" ;
            var logoid = key.replace("idr","");
            var logobtc = key.replace("btc","");

            if(key.includes('idr')){
              $("tr#"+key+"").html("<td><a href='/price/"+key+"'><i class='logo_svg-22 "+logoid+"-color'></i> "+label[key]+"</a></td><td class='text-right "+warna+"'>"+$.number(value)+"</td><td class='text-left "+warna+"'>"+icon+" "+jml_persen+" %</td>");
            }else{
              var p = Number(value) / 1e8;
              $("tr#"+key+"").html("<td><a href='/price/"+key+"'><i class='logo_svg-22 "+logobtc+"-color'></i> "+label[key]+"</a></td><td class='text-right "+warna+"'>"+parseFloat(p).toFixed(8)+"</td><td class='text-left "+warna+"'>"+icon+" "+jml_persen+" %</td>");
            }
            i++;
        })
    }

});
