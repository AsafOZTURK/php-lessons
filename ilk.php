<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Öğreniyorum</title>
</head>
<body>
<?php
        echo "Merhaba Dünya<br>";

        // Yorum satırı oluşturma 1

        # Yorum satırı oluşturma 2

        /* 

        Yorum satırı oluşturma 3

        */

        echo "Stringleri ve değişkenleri birleştirmek için " . " . kullanılır";

        $isim = "Mehmet Asaf";
        $soyisim = "ÖZTÜRK";
        $yas = 20;

        echo "<h3>Ben kimim</h3>";
        echo "Merhaba ben " . $isim . " " .$soyisim . " " . $yas . " yaşındayım.";
        echo "<hr>";
?>

<?php
    // MATEMATİK OPERATÖRLERİ

    $SayiBir = 20;
    $SayiIki = 46;
    $SayiUc = 4;

    $toplama = $SayiBir + $SayiUc;
    echo $SayiBir . " + " . $SayiUc . " = " . $toplama . "<br>";

    $carpma = $SayiBir * $SayiUc;
    echo " 20 ve 4 sayılarının çarpımı = " . $carpma . "<br>";

    echo $SayiBir . " bölü " . $SayiUc . " eşittir= " . $SayiBir / $SayiUc . "<br>";

/*     echo "$SayiBir + $SayiIki + $SayiUc = " . $SayiBir+$SayiIki+$SayiUc ; */
?>

<?php
    echo "<br><hr><br>";
    $aaa = 15;

    $BesEkle = $aaa+=5;
    echo $BesEkle . "<br>";

    $UcleCarp = $aaa*=3;
    echo $UcleCarp . "<br><hr>";

    $random = rand(0,50);
    echo "Rastgele üretilen sayı: " . $random;

?>

<?php
    echo "<h3>Hazır String Fonksiyonları</h3>" . "<br>";
    echo $yazi = "Ben Mehmet Asaf php kursu alıyorum" . "<br>";
    echo strtolower($yazi);  //kelimenin tüm harferlini küçük harfe çevirir
    echo strtoupper($yazi); //kelimenin tüm harferlini büyük harfe çevirir
    echo ucwords($yazi); //her kelimenin ilk harfini büyük yapar

    echo strlen($yazi) . "<br>"; //metnin karekter sayısını verir


    $metin = "Bu hazır metin string fonksiyonları içindir";

    echo substr($metin,3,6);



    $yazi="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


    echo "<h1>Haber Başlığı</h1>";

    echo "<p>".substr($yazi,0,250)."...</p>";

    echo "<a href=\"#\">Devamını Oku</a>";

?>
</body>
</html>