<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>5'lik Sistemde Notunuzu Giriniz</h3><br>
        <form action="" method="post">
            <input type="number" name="not" max="5">
            <input type="submit" name="FormKontrol" value="DURUM">
        </form>
    </center>

    <?php
    $not = $_POST[not];

    if (isset($_POST["FormKontrol"])) {
        switch ($not) {
            case '5':
                echo "<center><h3>ÇOK İYİ</h3></center>";
                break;
            case '4':
                echo "<center><h3>İYİ</h3></center>";
                break;
            case '3':
                echo "<center><h3>ORTA</h3></center>";
                break;
            case '2':
                echo "<center><h3>KÖTÜ</h3></center>";
                break;
            case '1':
                echo "<center><h3>KALDINIZ</h3></center>";
                break;
            default:
                echo "<center><h3>Geçersiz Giriş Yaptınız Tekrar Deneyiniz!</h3></center>";
                break;
        }
    }
    ?>

<br><hr><br>

    <center>
        <h4>Girilen Sayı Tek Mi Çift Mi Uygulaması</h4><br>
        <form action="" method="post">
            <input type="text" name="sayi" placeholder="Sayı"><br>
            <input type="submit" value="Kontrol Et" name="tekcift">
        </form>
    </center>

    <?php
    if (isset($_POST["tekcift"])) {

        $sayi = $_POST[sayi];
        echo "<center><h3>". $sayi ."</h3></center>";

        if ($sayi % 2) {
            echo "<center><h3>GİRDİĞİNİZ SAYI TEK!</h3></center>"; 
        } else {
            echo "<center><h3>GİRDİĞİNİZ SAYI ÇİFT!</h3></center>";
        }
    }
    ?>

</body>
</html>