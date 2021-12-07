<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php /////////////////////////FOR DÖNGÜSÜ////////////////////////////////////////
    for ($i=0; $i < 10 ; $i++) { 
        echo $i;
    }
    
    echo "<br>";

    for ($degisken=0; $degisken <= 50 ; $degisken+=5) { 
        echo " " . $degisken;
    }

    //DÖNGÜ İÇİNDE HTML YAZMA YÖNTEMİ
    for ($i=0; $i < 10; $i++) {?>
        <center>
            <div>
                <h3><?php echo $i; ?></h3>
            </div>
        </center>
    <?php } ?>

    <br><hr><br>

<!-- ------------------------------------------------------- -->
    <select >
        <?php //FOR DÖNGÜSÜ KULLANIM ÖRNEĞİ
        for ($plaka=1 ; $plaka <=81; $plaka++) {?>

            <option><?php echo $plaka ?></option>

        <?php }
        ?>
    </select>
<!-- ------------------------------------------------------- -->

    <br><hr><br>
    
    <?php //For döngüsü içinde if kullanımı

    for ($a=0; $a <= 5  ; $a++) { 
        echo $a . " ";

        if ($a == 3) {
            echo "<br>";
            echo $a . " sayısına geldik";
            echo "<br>";
        }
    }

    ?>
<br><br>
    <?php //0'dan 50'ye kadar olan sayıları 3'er yazdırma

    for ($sayi=0; $sayi <= 50 ; $sayi++) { 
        if ($sayi % 3 == 0 ) {
            echo $sayi . "<br>";
        }
    }

    ?>
<br><br>

    <?php //For döngüsü ile dizi yazdırma
    $dizi =array("ahmet","mehmet","ali","asaf",1,46,2,120,999);
    $say = count($dizi);

    for ($a=0; $a <=$say ; $a++) {
        echo $dizi[$a] . "<br>";
    }
    ?>


<br><hr><br>

<!-- /////////////////////////////// WHİLE DÖNGÜSÜ //////////////////////////////// -->

<?php
$sayi = 0;

while ($sayi <100 ) {
    echo $sayi . " ";
    $sayi++; //sonsuz döngüye girmemesi için koşulu tamamlamaya yarıyor
}
?>
<br><hr><br>
<!-- ///////////////////////////////// FOREACH DÖNGÜSÜ ////////////////////////////////////////////// -->

<?php
//dizileri basit şekilde yazdırmak için kullanılır
foreach ($dizi as $eleman) {
    echo $eleman . "<br>";
} 
?>

</body>
</html>