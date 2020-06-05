<?php 
require_once('guzzle/vendor/autoload.php');
// header('Content-Type: application/json');

$url = 'https://api.nakoda.daxy.in/user/login';
// $client = new Client();
$token ='Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZWMyM2Q0NDM1MTRjYzBmMTZkNTZkYjMiLCJudW1iZXIiOjEyMzQ1NiwidmVyaWZpZWQiOmZhbHNlLCJwcmljZWQiOmZhbHNlLCJyb2xlIjoiQURNSU4iLCJpYXQiOjE1OTEzNjAxMzgsImV4cCI6MTU5MTM2MzczOH0.203EDnwnQHFTS3tYoeKbJ11vOf-sIIX5oMQje0F0_00';

$client = new \GuzzleHttp\Client([
    'headers' => ['Authorization: '.$token ]
]);
$response = $client->request('POST', $url, [
    'number'=>'123456',
    'password'=>'12345',
    // 'multipart' => [
    //     [
    //         'name'     => '1.jpg',
    //         'contents' => fopen('img/1.jpg', 'r')
    //     ],

    // ]
]);
echo $response;
?>

