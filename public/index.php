<?php
require '../src/setting.php';

$app->get('/coinmarketcap', function($request,$response){
    $coin = $this->db->query("select * from mcoin");
    return $this->view->render($response, 'coinmarketcap.phtml',compact('coin'));
});

$app->get('/coinhils', function($request,$response){
    return $this->view->render($response, 'coinhils.phtml');
});


$app->get('/', function($request,$response){
    return $this->view->render($response, 'home.phtml');
});


$app->get('/assets-monitor', function($request,$response){
    $coin = $this->db->query("select * from coin where exc='idr'");
    $aset = $this->db->query("select a.*, b.label, b.name,b.id as kode,b.mcoin as icon from aset a join coin b on b.id=a.coin");
    return $this->view->render($response, 'btcid.phtml',compact('coin','aset'));
});

$app->post('/save-aset', function($request,$response){
    $post = $request->getParsedBody();
    $insert = "insert into aset (coin,hbeli,jml,modal) values(:coin,:hbeli,:jml,:modal) ";
    $stmt = $this->db->prepare($insert);
    $result = $stmt->execute([
            ':coin'=>$post['coin'],
            ':hbeli'=>$post['hbeli'],
            ':jml'=>$post['jml_aset'],
            ':modal'=>($post['hbeli'] * $post['jml_aset'])
        ]
    );

    if($result)
        return $response->withRedirect('/assets-monitor');
    else
        print_r($result);
});

$app->get('/src/btc-indonesia', function($request,$response){
    $coin = getCoinList($this);
    return $this->view->render($response, 'btcidprice.phtml',['coin'=>$coin]);
});

$app->get('/chat-monitor', function($request,$response){
    return $this->view->render($response, 'chat.phtml');
});

$app->get('/src/cryptocompare', function($request,$response){
    return $this->view->render($response, 'cryptocompare.phtml');
});

$app->get('/src/marketcap', function($request,$response){
    return $this->view->render($response, 'marketcap.phtml');
});

$app->get('/src/coinhills', function($request,$response){
    return $this->view->render($response, 'coinhills.phtml');
});

$app->get('/delete-asset/{id}', function($request,$response,$args){
    $id = $args['id'];
    $stmt = $this->db->prepare("delete from aset where id='$id'");
    $stmt->execute();
    return $response->withRedirect('/assets-monitor');
});

$app->get('/price/{id}', function($request,$response, $args){
    $id = $args['id'];
    $exchange = ['HitBTC','BitTrex','Poloniex','Bitstamp','Bitfinex','Coinbase','Kraken'];
    $stmt = $this->db->prepare("select * from coin where id='$id'");
    $stmt->execute();
    $row = $stmt->fetch();
    $m = $this->db->prepare("select * from mcoin where id='".$row['mcoin']."'");
    $m->execute();
    $mcoin = $m->fetch();
    $idr = file_get_contents("http://data.fixer.io/api/latest?access_key=522a3f48b6ee1344d755f9c1a119f0b5&base=USD&symbols=IDR");
    return $this->view->render($response, 'details.phtml',compact('row','mcoin','idr','exchange'));
});

function getCoinList($obj)
{
    $coin = $obj->db->query("select * from coin");
    $arr = [];
    foreach($coin as $row){
        $arr[$row['id']] = $row['label'];
    }

    return json_encode($arr);
}

function toBTC($value){
    return bcdiv( intval($value), 100000000, 8 );
}

$app->run();
