<?php
// VERİ ÇEKME BOT ÖRNEĞİ

$ch = curl_init();
curl_setopt_array($ch, 
[
    CURLOPT_URL => 'https://www.emrahyuksel.com.tr',
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => 1 //sayfanın kodunu çekme
]);

$veri = curl_exec($ch);
curl_close($ch);

//düzenli ifadeler REGEX

preg_match_all('@<title>(.*?)</title>@',$veri,$sonuc);
echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<hr>";

preg_match_all('@<li>(.*?)</li>@si',$veri,$sonuc);
echo "<pre>";
// print_r($sonuc);
foreach ($sonuc[1] as $key) {
    echo $key."<br>";
}
?>