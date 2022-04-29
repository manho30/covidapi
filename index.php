<?php 

http_response_code(200);
header("Content-type: application/json");
echo (
    json_encode(
        array(
            "ok" => true,
            "status" => 200,
            "message" => "read the documentation for using this API! "
        )
    )
)

?>