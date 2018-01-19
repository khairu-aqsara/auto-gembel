$(document).ready(function(){
    var pusher_tradedata = false;
    var pusher = new Pusher('a0dfa181b1248b929b11', {
        cluster: 'ap1',
        encrypted: true
    });

    start_pusher_tradedata();

    function start_pusher_tradedata(){
		pusher_tradedata = pusher.subscribe('tradedata-btcidr');
		pusher_tradedata.bind('update', function(data) {
            set_harga(data.prices);
            updateAset()
            setWarna()
		});
    }

    function set_harga(harga)
    {
        $.each(harga, function(key,value){
            if( $('td.harga_'+key+'').length ){
                $('td.harga_'+key+'').text($.number(value));
                $('td.harga_'+key+'').attr("data-value", value);
            } 
        })
    }

    function updateAset()
    {
        var taset = 0;
        var tlaba= 0;
        $("td.vharga").each(function(){
            var txt = $(this).text();
            var aset = $(this).closest('td').prev('td').prev('td').text();
            var modal = $(this).closest('td').prev('td').attr("data-modal");
            var hnow = $(this).attr("data-value")
            var asetnow = $(this).closest('td').next('td');
            var labarugi = $(this).closest('td').next('td').next('td');
            asetnow.text($.number(hnow*aset));
            var lbrg = (hnow*aset) - modal;
            labarugi.text($.number(lbrg));
            labarugi.attr("data-value", lbrg);
            taset = (taset+(hnow*aset));
            tlaba = (tlaba + ((hnow*aset) - modal));
            $("td#taset").text($.number(taset));
            $("td#tlaba").text($.number(tlaba));
            $("td#tlaba").attr("data-value", tlaba);
        });
    }

    function setWarna(){
        $("td.vlaba").each(function(){
            var val = $(this).data("value");
            if(val < 0){
                $(this).css("background","#F44336");
                $(this).css("color","#fff");
            }else{
                $(this).css("background","#4CAF50");
                $(this).css("color","#fff");
            }
        });

        var tlaba = $("td#tlaba").data("value");
        if(tlaba < 0){
            $("td#tlaba").css("background","#F44336");
            $("td#tlaba").css("color","#fff");
        }else{
            $("td#tlaba").css("background","#4CAF50");
            $("td#tlaba").css("color","#fff");
        }
    }
    
});