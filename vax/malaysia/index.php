<?php

require '../../path/path.php';

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);


$max_calls_limit  = 30;
$time_period      = 30;
$total_user_calls = 0;

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $user_ip_address = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $user_ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $user_ip_address = $_SERVER['REMOTE_ADDR'];
}

if (!$redis->exists($user_ip_address)) {
    $redis->set($user_ip_address, 1);
    $redis->expire($user_ip_address, $time_period);
    $total_user_calls = 1;
} else {
    $redis->INCR($user_ip_address);
    $total_user_calls = $redis->get($user_ip_address);
    if ($total_user_calls > $max_calls_limit) {
   
            $json = array("Status"=>"Fail","Message"=>"Rate limit exceeded!","IP Address"=>$user_ip_address,"Total_Calls"=>$total_user_calls,"Period"=>$time_period);
       header('Content-type: application/json');  header('Access-Control-Allow-Origin: *');
     header('HTTP/1.1 429 Too Many Requests');
   echo (json_encode($json));
        exit();
    }
}

$url = $vax_my_csv;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

//define the csv source
$src = curl_exec($curl);
curl_close($curl);

// explode the csv source as array of arrays
$csv = array_map("str_getcsv", explode("\n", $src));

// deifine the first line of headers
$header = $csv[0];

// define an empty array to store the header name
$variable = [];


foreach ($header as $headers) {
    //define a new variable to store every single headers
    $variable[] = $headers;
}

// define an empty array to store the output data
$output = [];

// combine the data with headers name
for ($i = 0; $i < count($csv) - 1; $i++){
    $combines = array_combine($variable, $csv[$i]);
    
    $output[$i] = $combines;
} 

// delete the first element of 
// content which is unnecessary
array_shift($output);

// return json data
header("Content-type: application/json");
http_response_code(200);

echo(
    json_encode(
        array(
            'ok' => true,
            'status' => 200,
            'result' => $output
        ), JSON_PRETTY_PRINT
    )
)
?>