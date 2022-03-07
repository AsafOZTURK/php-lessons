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



<?php

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Back-end Teknolojileri'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Front-End Teknolojileri'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Mobil Uygulama'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'PHP'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Codeigniter'
    ],
    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Javascript'
    ],
    [
        'id' => 9,
        'parent' => 8,
        'name' => 'VueJS'
    ],
    [
        'id' => 10,
        'parent' => 8,
        'name' => 'AngularJS'
    ]
];
Bu dizi elemanlarını hiyararşik biçimde ekrana yazdıralım.

function categoryList(array $categories, int $parent = 0) : string
{
    $html = '<ul>';
    foreach ($categories as $category)
        if ($category['parent'] == $parent):
            $html .= '<li>' . $category['name'];
            $html .= categoryList($categories, $category['id']);
            $html .= '</li>';
        endif;
    $html .= '</ul>';
    return $html;
}


echo categoryList($categories);
</body>
</html>