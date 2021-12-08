<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php /////////////////////FONKSİYOLAR //////////////////
    function topla($sayi1,$sayi2) {
        $toplam = $sayi1 + $sayi2;
        return $toplam;
    }

    echo topla(56,954);
    echo "<br>";


    //Global Değişken Kullanımı
    $b = 20;
    function ekle($a) {
        global $b;
        return $a + $b;
    }

    echo ekle(10);
    echo "<br>"
    ?>

    <?php
    //Fonksiyonlarda Varsayılan Değer
    function yaz($ad="isim girilmedi",$soyad="soyisim girilmedi") {
        return $ad . " " . $soyad;
    }

    echo yaz("Mehmet");
    echo "<br><hr><br>";
    ?>

    <!-- function_exists(fonksiyon_Adı) FONKSİYONUN OLUP OLMADIĞINI SORGULAR -->
    <!-- kendini içinde kendini tekrar eden fonksiyonlara recursive fonksiyon denir -->


    <?php //PHP İÇİNDE BULUNAN TÜM FONKSİYONLARI GÖRME
    $TumFonksiyonlar = get_defined_functions();
    echo "<pre>";
    print_r($TumFonksiyonlar) ;
    echo "</pre>";
    ?>
</body>
</html>