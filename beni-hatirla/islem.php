<?php
ob_start();
session_start();

$kayitli_nickname = "Asaf";
$kayitli_parola = "12345";

if (isset($_POST['kullanicigiris'])) {

    if ($_POST['nickname'] == $kayitli_nickname && $_POST['parola'] == $kayitli_parola) {

        $_SESSION['nickname'] = $_POST['nickname'];
        $_SESSION['parola'] = $_POST['parola'];

        if (isset($_POST['benihatirla'])) {
            //cookie atama
            setcookie("nickname",$kayitli_nickname,strtotime("+1 day"));
            setcookie("parola",$kayitli_parola,strtotime("+1 day"));

        } else {
            //cookie silme
            setcookie("nickname",$kayitli_nickname,strtotime("-1 day"));
            setcookie("parola",$kayitli_parola,strtotime("-1 day"));

        }

        Header("Location:index.php?giris=ok");

    } else {
        //Kullanici adi veya şifre yanlış
        Header("Location:index.php?giris=no");

    }
}
?>