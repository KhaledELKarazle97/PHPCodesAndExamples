<?php

// url to issue the put request to
$goTo = "http://localhost/PHP%20Codes%20and%20Examples/putExampleServer.php";

//initilize curl for put requests
$curlInit = curl_init();

//set some options
curl_setopt($curlInit, CURLOPT_URL, $goTo);
curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlInit, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curlInit, CURLOPT_POSTFIELDS,"var=hello_world");

//execute the curl operation
echo curl_exec($curlInit);



?>