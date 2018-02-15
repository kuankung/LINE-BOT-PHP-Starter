<?php
$access_token = 'bNlMZF/qGOc5bxNA2+dbh9VrTe/AHoXcszXOgpHUrjkTBv7IrjlzxDk9updVmNCF4mXB6oXm23inlEvJeISVLy1Xmla0zBvk0Pcw6U0MJOLG1b2x3e1y5j+PH7PcVvkyZplQTqV5agy7Mybn6bfsOQdB04t89/1O/w1cDnyilFU=
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
