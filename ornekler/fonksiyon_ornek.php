<?php
/*
Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen bir fonksiyon yazın. Fonksiyon içerisinde while ve for döngülerinin her ikisini de kullanın.

ucgen(15);
15 sayısı için örnek ekren çıktısı;

O
O O
O O O
O O O O
O O O O O
O O O O O O
O O O O O O O
O O O O O O O O
O O O O O O O O O
O O O O O O O O O O
O O O O O O O O O O O
O O O O O O O O O O O O
O O O O O O O O O O O O O
O O O O O O O O O O O O O O
O O O O O O O O O O O O O O O
O O O O O O O O O O O O O O O O

*/

function ucgen($sayi) {
    $x = 0; 
    while ($x < $sayi) {

        for ( $i = 0 ; $i <= $x; $i++)  {
            echo  "*"; 
        }

        echo "<br>";
        $x ++;
    }
}

echo ucgen(15);
?>