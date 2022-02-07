<?php

if (isset($_GET['sepetekle'])) {

    setcookie('sepet['.$_GET['id'].']',$_GET['adet'],strtotime('+1 day'));
    Header("Location:sepet.php");
    exit;
}

if (isset($_GET['sil'])) {

    setcookie('sepet['.$_GET['id'].']',$_GET['adet'],strtotime('-1 day'));
    Header("Location:sepet.php");
    exit;
}

if (isset($_GET['sepetguncelle'])) {

    foreach ($_GET['urun'] as $key => $value) {
        setcookie('sepet['.$key.']',$value[0],strtotime('+1 day'));

    }
    Header("Location:sepet.php");
    exit;
}

?>