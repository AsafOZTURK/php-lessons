<?php
 /*
$ch = curl_init();
$file = fopen("kaynak.txt","w"); //bu dosya varsa açya yoksa oluştur

curl_setopt($ch, CURLOPT_URL, 'https://www.neyazilim.com'); //bunu kullanmak zorunda değilsin curl_init() içine yazabilirsin linki
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  //ssl sertifikalı sitelere ulaşma
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true ); //kaynak kodunu alma
curl_setopt($ch, CURLOPT_FILE, $file); //dosyaya yazma

if (curl_exec($ch)) { // kontrol etme
    echo "Kaynak kodu dosyaya yazıldı";
}

curl_close($ch);
*/

///////////////////////////////////// REFERER DEĞİŞTİRME /////////////////////////////////////////////////////

/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/curl/referer.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_REFERER, "https:www.mynet.com"); // buradan gidiyormuş gibi görüntüleme
curl_exec($ch);
curl_close($ch);
*/

////////////////////////////////////////////// USER AGENT BİLGİLERİ ////////////////////////////////////////////

/*
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://localhost/curl/agent.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_USERAGENT, "Özel");

curl_exec($ch);
curl_close($ch);
*/

////////////////////////////////////////////// SETUP ARRAY /////////////////////////////////////////////////////////

$ch = curl_init();

curl_setopt_array($ch, 
    [
        CURLOPT_URL => "http://localhost/curl/referer.php",  
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => "Özel"
    ]);

curl_exec($ch);
curl_close($ch);

?>
<!-- <a href="https://www.neyazilim.com'">Git</a> -->