<?php
$access_token = '9ETZXQVxl9lt91r+vOKK5XG87M/MMiHHzjrLfuXqmlghFQ8v6wdMlPw61eAr1RNI+7xeSsmKQ6Rl+IoXWbffN1YVzCsih8JfYifWwcXGJXL/4Q84ZNTr1IgAt4Y51RskBOs/Jb+1nc8Og0FQ00c1hAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
