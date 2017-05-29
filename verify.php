<?php
$access_token = 'fHN/0KUT55WqcwDDjqe9rLmrGxqKPWnm/Nlj05Izy/NajTmcN5hFDUZPqhnBAPdyABd/XsW9q8I/J+BVamiwcax0AkR5O2Q5udOFJekjMsQN8u45ogzHAYmjvzZhhDGPPEoxAqGrfPnej8W+JODD1QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;