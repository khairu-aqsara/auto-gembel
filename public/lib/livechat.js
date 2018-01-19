$(document).ready(function(){
    var pusher_tradedata = false;
    var pusher = new Pusher('a0dfa181b1248b929b11', {
        cluster: 'ap1',
        encrypted: true
    });

    var scrolled = false;

    start_pusher_tradedata();

    function start_pusher_tradedata(){
		pusher_tradedata = pusher.subscribe('chatserver');
		pusher_tradedata.bind('message', function(data) {
            chatview(data);
		});
    }

    function chatview(data){
        if (data.level == 99) {
            lvlclass = 'cpartner';
        } else if (data.level == 5) {
            lvlclass = 'cjedi';
        } else if (data.level == 4) {
            lvlclass = 'cmastah';
        } else if (data.level == 3) {
            lvlclass = 'cdiamond';
        } else if (data.level == 2) {
            lvlclass = 'cgold';
        } else if (data.level == 1) {
            lvlclass = 'cbronze';
        } else if (data.level == -1) {
            title = 'Newbie';
            lvlclass = 'cnewbie';
        } else {
            lvlclass = 'cgray';
        }

        var chat_msg = "<div class='col-sm-2 cols-xs-12'><span class='"+lvlclass+"'>@"+data.username+"</span></div><div class='col-sm-10 col-xs-12'> : "+data.isi+"</div>";
        
        if(data.isi.length < 50) 
            $("#chat").append(chat_msg);
            $('#chat').scrollTop($('#chat')[0].scrollHeight);
    }
});