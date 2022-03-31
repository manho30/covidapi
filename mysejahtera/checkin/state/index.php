<?php

require '../../../path/path.php';

$url = $mysej_checkin_state_csv;
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