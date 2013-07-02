<?php

//set POST variables
$url = 'http://global.lc/sci_validate.php';
foreach ($_REQUEST as $key => $post) {
    $fields[$key] = urldecode($post);
}

//url-ify the data for the POST
$fields_string = '';
foreach ($fields as $key => $value) {
    $fields_string .= $key . '=' . $value . '&';
}
rtrim($fields_string, '&');
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

echo $result;