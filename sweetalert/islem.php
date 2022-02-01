<?php

$kullanici_ad = "Asaf";
$kullanici_pass = "123";

if (isset($_POST['ilkform'])) {

    if (empty($_POST['kullanici_ad']) or empty($_POST['kullanici_pass'])) {

        $data["status"] = "info";
        $data["message"] = "Kullanici adi yada şifre boş bırakılamaz";

        echo json_encode($data);

    } else if (($kullanici_ad == $_POST['kullanici_ad']) and ($kullanici_pass == $_POST['kullanici_pass'])) {

        $data["status"] = "success";
        $data["message"] = "Giriş Başarılı";

        echo json_encode($data);
        
    } else {

        $data["status"] = "warning";
        $data["message"] = "Bilgileriniz hatalı";

        echo json_encode($data);
        
    }
}
