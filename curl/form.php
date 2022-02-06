<!-- <form action="post.php" method="POST">
    Kullanını Adı<input type="text" name="kullanici_ad">
    Şifre<input type="text" name="sifre" >

    <button type="submit">Gönder</button>
</form> -->


<?php
///////////////////////////// POST ///////////////////////////////////////
/*
$data = [
    "kullanici_ad" => "asaf",
    "sifre" => "123",
];
// POST İŞLEMİ
$ch = curl_init('http://localhost/curl/post-get.php');

curl_setopt_array($ch,
[
    CURLOPT_POST => "true",
    CURLOPT_POSTFIELDS => $data
]);

curl_exec($ch);
curl_close($ch);
*/
?>

<?php
///////////////////////// GET ////////////////////////////////////////////
$get = "http://localhost/curl/post-get.php?get1=asaf";

$ch = curl_init($get);

curl_exec($ch);
curl_close($ch);
?>