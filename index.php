<?php
$access_token = 'rKLcnxyv9/WSR/qvPv7LH0QNGnxwP40Zyv4WvH41Ef0+JKWXsDpV0hCXYlTKaOhhBHAEgQzkL5VSkJQQ6PGiK0a8M9GCRF+FvXyu8ilgc46yaJFutahiHm10G4L5EHsu6SezkXOZRt+ojobdhc+8mQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;