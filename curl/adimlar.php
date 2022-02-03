<?php
//cURL Çalışma Adımları

//Başlatma
$ch = curl_init();

//cURL oturum seçeenklerini tanımla
curl_setopt($ch, CURLOPT_URL, 'https://www.php.net');

//SSL sertifikalı siteler için
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

//cURL çalıştırma
$source = curl_exec($ch);

//Bitirme
curl_close($ch);

?>