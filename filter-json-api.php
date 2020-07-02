<?php 
$data = file_get_contents('rest-api or json file');

$json = json_decode($data, 1);

$result = $json['message'];
$provider = array();

foreach ($result as $key => $val){

    if ($val['provider'] == 'AXIS'){

        $provider[] = $val;

    } else if ($val['provider'] == 'TELKOMSEL') {

        $provider[] = $val;

    }

}

header('Content-Type: application/json');

echo json_encode($provider);

die();
 ?>
