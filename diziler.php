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

    $dizi=array("Mehmet","Asaf",46,120,1,"ÖZTÜRK");
    echo "<pre>";
    print_r($dizi);
    echo "</pre><br>";
    print_r($dizi);

    echo "<br>";
    echo $dizi[0];
    ?>

    <?php //SORT - RSORT - EXPLODE - İMPLODE KULLANIMI

    $dizim=array(46,1,5,8,3,4,2,64,99);
    echo "<pre><br>";
    echo print_r($dizim);
    echo "</pre>";

    sort($dizim);
    echo "<pre><br>";
    echo print_r($dizim);
    echo "</pre>";

    rsort($dizim);
    echo "<pre><br>";
    echo print_r($dizim);
    echo "</pre>";

    echo "<br>64 dizinin içinde varsa 1 yoksa boş dönecek: ";
    echo in_array("64",$dizim);

    echo "<br>";
    echo implode("-",$dizim);  //istediğimiz şeyle birleştirebiliriz -*+- boşluk ,.
    ?>

    <?php
    $zaman = "02-12-2021 22:51";
    $ayirma = explode(" ",$zaman);

    echo "<pre><br>";
    echo print_r($ayirma);
    echo "</pre><br><hr><br>";
    ?>

    <?php //DATE KULLANIMI
    date_default_timezone_set("Europe/Istanbul");
    $zaman = date("d-m-y h:i:s");
    echo $zaman;

    $sonuc = explode(" ",$zaman);

    echo "<br>Tarih: " . $sonuc[0] . " Saat: " . $sonuc[1];
    ?>


</body>
</html>