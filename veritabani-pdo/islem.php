<?php
require_once "baglanti.php";

/**********************************************VERİ EKLEME*******************************************/

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

/****************************************VERİ SİLME*************************************************/

if ($_GET['bilgilerimsil']=='ok') {

    $sil = $db -> prepare("DELETE FROM kullanici WHERE kullaniciID=:id");
    $kontrol = $sil -> execute(array('id' => $_GET['kullaniciID']));
    
    if ($kontrol) {
        Header("Location:index.php?silme=ok");
        
    } else {
        Header("Location:index.php?silme=no");
    }
}

/***************************************VERİ DÜZENLEME********************************************/

if (isset($_POST['uptadeislemi'])) {
    
    $kullaniciID = $_POST['kullaniciID'];
    
    $uptade = $db -> prepare("UPDATE kullanici SET
		kullaniciAdi=:kullaniciAdi,
		kullaniciSoyadi=:kullaniciSoyadi,
		kullaniciMail=:kullaniciMail,
        kullaniciParola=:kullaniciParola,
		kullaniciYas=:kullaniciYas
		WHERE kullaniciID={$_POST['kullaniciID']}
		");

	$kontrolet = $uptade -> execute(array(

		'kullaniciAdi' => $_POST['kullaniciAdi'],
		'kullaniciSoyadi' => $_POST['kullaniciSoyadi'],
		'kullaniciMail' => $_POST['kullaniciMail'],
        'kullaniciParola' => $_POST['kullaniciParola'],
		'kullaniciYas' => $_POST['kullaniciYas']
	));
    
    if ($kontrolet) {
        Header("Location:index.php?durum=ok");
		exit; 

    } else {
        Header("Location:index.php?durum=no");
		exit;
    }
}

?>
