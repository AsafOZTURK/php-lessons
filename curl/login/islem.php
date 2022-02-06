<?php
session_start();
// basit bir login işlemi senaryosu 

if (isset($_POST['login'])) {

    if ($_POST['kullanici_ad'] == "asaf" && $_POST['kullanici_pass'] == "123") {

        $_SESSION['kullanici_ad'] = "asaf";
        Header("Location:index.php?login=ok");

    } else {

        echo "Bilgiler yanlış";
        echo "<a href='index.php'>Geri Dön</a>";

    }
}

?>