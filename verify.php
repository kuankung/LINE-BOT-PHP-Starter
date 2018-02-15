<?php
$access_token = 'kCBWBsJHViYqh6kWpgXi/P7k3CbRUkG0cQuNmZOBWz3YvhCmXX9iw+np9xxQnA3t4mXB6oXm23inlEvJeISVLy1Xmla0zBvk0Pcw6U0MJOKJbtNdiiIJnEtLYhl05KnNWXL+dyILYhrn2QGWG3iFrgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
