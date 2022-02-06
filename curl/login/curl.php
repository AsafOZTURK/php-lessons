<?php

$ch = curl_init();
curl_setopt_array($ch, 
[
    CURLOPT_URL => 'http://localhost/curl/login/islem.php',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => 
    [
        "kullanici_ad" => "asaf",
        "kullanici_pass" => "123",
        "login" => 1
    ],
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_COOKIEJAR => "cookies.txt"
]);

curl_exec($ch);
curl_close($ch);

?>