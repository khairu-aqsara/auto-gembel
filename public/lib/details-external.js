MarketKap();
function CryptoCompareApi(exchange)
{
    var ur = (jenis == 'idr') ? "USD" : "BTC";
    $.ajax({
        type :'get',
        url  : 'https://min-api.cryptocompare.com/data/pricemultifull?fsyms='+lbl+'&tsyms='+ur+'&e='+exchange+'',
        success:function(xhr){
            if(xhr.hasOwnProperty('Response')){
                $("#"+exchange+"").remove();
            }else{
                var arr = $.map(xhr, function(el) { return el });
                var arr2 = $.map(arr[0], function(el) { return el });

                if(jenis == 'idr'){
                    var hrg = $.number(arr2[0].USD.PRICE * idr.rates.IDR);
                    var change24h = parseFloat(arr2[0].USD.CHANGEPCT24HOUR).toFixed(2);
                    var change1h = parseFloat(arr2[0].USD.CHANGE24HOUR * idr.rates.IDR).toFixed(2);
                }else{
                    var hrg = parseFloat(arr2[0].BTC.PRICE).toFixed(8);
                    var change24h = parseFloat(arr2[0].BTC.CHANGEPCT24HOUR).toFixed(2);
                    var change1h =  parseFloat(arr2[0].BTC.CHANGE24HOUR).toFixed(8);
                }
                
                var warna24 = (change24h < 0) ? "text-danger" : "text-success"; 
                var icon24 = (change24h < 0) ? "<span class='glyphicon glyphicon-triangle-bottom small'></span>" : "<span class='glyphicon glyphicon-triangle-top'></span>" ;
                var per24 = "<div class='"+warna24+"'>24h:"+icon24+" "+change24h+" %</div>";

                var hh = (jenis == 'idr') ? $.number(change1h) : change1h;
                
                var warna1h = (change1h < 0) ? "text-danger" : "text-success"; 
                var icon1h = (change1h < 0) ? "<span class='glyphicon glyphicon-triangle-bottom small'></span>" : "<span class='glyphicon glyphicon-triangle-top'></span>" ;

                var per1h = "<div class='"+warna1h+"'>24h:"+icon1h+" "+hh+"</div>";

                $("#"+exchange+"-price").text(hrg);
                $("#"+exchange+"-change1h").html(per1h);
                $("#"+exchange+"-change24h").html(per24);
            }
        }
    });
}

function MarketKap()
{
    $.ajax({
        type :'get',
        url  : 'https://api.coinmarketcap.com/v1/ticker/'+uri+'/?convert=USD',
        success:function(xhr){
            if(jenis == 'idr'){
                var hrg = $.number(xhr[0].price_usd * idr.rates.IDR);
            }else{
                var hrg = xhr[0].price_btc;
            }
            

            var change24h = xhr[0].percent_change_24h;
            var warna24 = (change24h < 0) ? "text-danger" : "text-success"; 
            var icon24 = (change24h < 0) ? "<span class='glyphicon glyphicon-triangle-bottom small'></span>" : "<span class='glyphicon glyphicon-triangle-top'></span>" ;
            var per24 = "<div class='"+warna24+"'>24h:"+icon24+" "+change24h+" %</div>";

            var change1h = xhr[0].percent_change_1h;
            var warna1h = (change1h < 0) ? "text-danger" : "text-success"; 
            var icon1h = (change1h < 0) ? "<span class='glyphicon glyphicon-triangle-bottom small'></span>" : "<span class='glyphicon glyphicon-triangle-top'></span>" ;

            var per1h = "<div class='"+warna1h+"'>1h:"+icon1h+" "+change1h+" %</div>";

            $("#marketkap-price").text(hrg);
            $("#marketkap-change1h").html(per1h);
            $("#marketkap-change24h").html(per24);
        }
    });
}