<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="margin-top: 16%;">
    <center>
        <h2>Not Durum Hesaplama Uygulaması</h2>
        <h4>Vize%30 - Final%40 - Uygulama%30<h4>
        <form action="" method="post">
            Vize Notu: <input type="text" name="vize"><br>
            Final Notu: <input type="text" name="fınal"><br>
            Uygulama Notu: <input type="text" name="uygulama"><br>
            <input type="submit" name="gonder" value="HESAPLA">
        </form>
    </center>

        <?php

        if (isset($_POST["gonder"]) ) {
            $vize = $_POST[vize];
            $final = $_POST[fınal];
            $uygulama = $_POST[uygulama];

            $ortalama = (($vize*30) + ($final*40) + ($uygulama*30)) / 100;

            if ($ortalama >= 90 && $ortalama <=100) {
                echo "<center><h3>AA İLE GEÇTİ!</h3></center>";
            } elseif ($ortalama >= 70 && $ortalama<90) {
                echo "<center><h3>BB İLE GEÇTİ!</h3></center>";
            } elseif ($ortalama >= 60 && $ortalama<70) {
                echo "<center><h3>CC İLE GEÇTİ!</h3></center>";
            } elseif ($ortalama >= 50 && $ortalama <60) {
                echo "<center><h3>DD İLE GEÇTİ!</h3></center>";
            } elseif ($ortalama <50 && $ortalama >= 0) {
                echo "<center><h3>KALDI!!!!!!</h3></center>";
            } else {
                echo "<center><h3>GEÇERSİZ NOT BİÇİMİ TEKRAR DENEYİNİZ!</h3></center>";
            }
        }
        ?>
</body>
</html>