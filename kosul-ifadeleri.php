<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $sayi = 0;

    if ( $sayi == 5) {
        echo "Sayı 5'e eşittir";
        echo "<br>";
    }

    // < > <= >= == === koşulları kullanılabilir

    // İF ELSEİF ELSE KULLANIMI
    if ($sayi>0) {
        echo "Sayı pozitiftir";
    } elseif ($sayi<0) {
        echo "Sayı negatiftir";
    } else {
        echo "Sayı 0'a eşittir";
    }
    ?>
<br>

    <?php //KISA İF KULLANIMI
    $değer = "Elma";

    echo $değer=="Elma" ? "Değer=Elma" : "Değer elma Değil";

    ?>

<br><hr><br>

    <center>
        <h2>Gİriş Yapma Sayfası</h2>
        <form action="" method="post">
            <input type="text" name="isim" placeholder="Kullanıcı Adı"><br>
            <input type="password" name="sifre" placeholder="Şifre"><br>
            <input type="submit" value="Giriş Yap">
        </form>
    </center>   


    <?php ////////////////////KULLANICI GİRİŞ YAPMA UYGULAMASI///////////////////////////////////////////////

    $KullaniciAdi = "mehmet";
    $KullaniciSifre = "öztürk";

    $isim = $_POST[isim];
    $sifre = $_POST[sifre];

    if ($KullaniciAdi==$isim && $KullaniciSifre==$sifre) {
        echo "<center><h2>KULLANICI BAŞARIYLA GİRİŞ YAPTI</h2></center>";
    } elseif ($KullaniciAdi==$isim && $KullaniciSifre!=$sifre) {
        echo "<center><h2>GİRİŞ BAŞARISIZ!<br> Kullanıcı Şifresi Hatalı</h2></center>";
    } elseif ($KullaniciAdi!=$isim && $KullaniciSifre==$sifre) {
        echo "<center><h2>GİRİŞ BAŞARISIZ!<br> Kullanıcı Adı Hatalı</h2></center>";
    } else {
        echo "<center><h2>GİRİŞ BAŞARISIZ!<br> Kullanıcı Adı ve Şifre Hatalı</h2></center>";
    }

    ?>

<br><hr><br>

    <?php // SWİTCH CASE KULLANIMI
    $renk = "mavi";

    switch ($renk) {
        case 'mavi':
            echo "renk mavidir";
            break;
        case 'kırmızı':
            echo "renk kırmızıdır";
            break;
        case 'turuncu':
            echo "renk turuncu";
            break;
        case 'yeşil':
            echo "renk yeşildir";
            break;
        default:
            echo "Geçersiz renk";
            break;
    }

    ?>
</body>
</html>