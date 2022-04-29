<?php 

http_response_code(400);
header("Content-type: application/json");
echo ("400 - No such data to return.\n\n\nread the documentation for using this API! \n\nAccesing the root directory of this API will not return relevent data.\n\nPlease use the following link to access the documentation: https://mycovidapi2.herokuapp.com/docs");
?>