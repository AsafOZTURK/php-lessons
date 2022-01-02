<!-- //////////////// ÇALIŞMIYOR AMA ÖRNEK OLSUN DİYE KOYUYORUM ////////////////////////////////// -->
<?php

$veri = file_get_contents("https://www.udemy.com/sifirdan-ileri-seviye-web-programlama-html-php-pdo-mysql");

preg_match_all('@<div data-purpose="enrollment">(.*?) (.*?)studens@si', $veri, $dlinkcek);

// echo "<pre>";
// print_r($dlinkcek);
// echo "</pre>";
// exit;

$toplam = $dlinkcek[2][0];

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //end() fonksiyonu dizinin son elemanını verir !!!


    $dosya = "veri.txt";
    $handle = fopen($dosya, "r");
    $icerik = fread($handle, filesize($dosya));
    $listele = explode(' ', $icerik);
    fclose($handle);

    $sat = (int)end($listele);


    if ($toplam > $sat) {
        //Sms Gönder
        //KENDİNİZE GÖRE ÖZELLEŞTİRMEDEN ÇALIŞMAZ goner.php içerisinde kullanıcı adı şifre boş doldurun

        $text = "$toplam. kurs kaydi yapildi simdi.";

        //Sms Gönderim İşlemi
        include 'gonder.php';

        $result = sendRequest('http://api.iletimerkezi.com/v1/send-sms', $xml, array('Content-Type: text/xml'));

        //die('<pre>'.var_export($result,1).'</pre>');

    ?>

        <h1 style="font-size:100px;text-align:center;color:red">Yeni Öğrenci Kaydoldu!</h1>

        <audio autoplay>
            <source src="money.mp3" type="audio/mpeg">
            Tarayıcınızda bu eklenti çalışmıyor
        </audio>

        <?php
        $fh = fopen($dosya, "w") or die("Açılmadı.");
        $veri = " " . trim($toplam);
        fwrite($fh, $icerik . $veri);
        fclose($fh);
        //txt veri yazma işlemleri

        $fh = fopen($dosya, 'w') or die("Açılamadı.!");
        $veri = " " . trim($toplam);
        fwrite($fh, $icerik . $veri);
        fclose($fh);

        //mail gönderim işlemleri
        include '../nedmin/netting/baglan.php';
        require("../mailphp/class.phpmailer.php");

        $ayarsor = $db->prepare("select * from ayar where ayar_id=?");
        $ayarsor->execute(array(0));
        $ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);


        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->Host     = $ayarcek['ayar_smtphost'];
        $mail->SMTPAuth = true;
        $mail->Username = $ayarcek['ayar_smtpuser'];
        $mail->Password = $ayarcek['ayar_smtppassword'];
        $mail->Port     = $ayarcek['ayar_smtpport'];
        $mail->From     = $ayarcek['ayar_smtpuser'];
        $mail->Fromname = "Öğrenci Kaydı";
        $mail->AddAddress("info@emrahyuksel.com.tr", "Sipariş");
        $mail->Subject  =  "$toplam. Öğrenci Kaydı";
        $mail->Body     =  $body;
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';

        if ($mail->Send()) {
            //echo "Mesaj Gönderildi <p>";
            exit;
        }
        
        ?>

    <?php } else { ?>

        <h1 style="font-size:100px;text-align:center;color:red">Yeni Kayıt YOK!</h1>

    <?php }
    ?>
</body>

</html>