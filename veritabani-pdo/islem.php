<?php
require_once "baglanti.php";
   
if (isset($_POST["insertislemi"])) {  //Formun gelip gelmediğini kontrol ediyoruz

    $kaydet=$db->prepare("INSERT into kullanici set 
        kullaniciAdi=:kullaniciAdi,
        kullaniciSoyadi=:kullaniciSoyadi,
        kullaniciMail=:kullaniciMail,
        kullaniciParola=:kullaniciParola,
        kullaniciYas=:kullaniciYas
        ");
    
    $insert=$kaydet->execute(array(
        
        'kullaniciAdi' => $_POST['kullaniciAdi'],
        'kullaniciSoyadi' => $_POST['kullaniciSoyadi'],
        'kullaniciMail' => $_POST['kullaniciMail'],
        'kullaniciParola' => $_POST['kullaniciParola'],
        'kullaniciYas' => $_POST['kullaniciYas']
    ));

    if ($insert) {
        //echo "Kayıt İşlemi Başarılı...";
        Header("Location:index.php?durum=ok");

    } else {
        //echo "Kayıt İşlemi Başarısız...";
        Header("Location:index.php?durum=no");
    }


}

?>