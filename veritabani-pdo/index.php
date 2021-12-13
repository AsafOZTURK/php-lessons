<?php require_once "baglanti.php"; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritabanı Kayıt | Güncelleme</title>
    <style>
        .form {
            text-align: center;
            line-height: 2;
        }
        .form2 {
            text-align: center;
            line-height: 2;
            margin-top: 20px;
        }
        h2,h4 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Veritabanı PDO Kayıt İşlemleri</h2>
    <hr>
    <?php
    if ($_GET['durum'] == "ok") {
        echo "<h4>Kayıt İşlemi Başarılı</h4>";
    } elseif ($_GET['durum'] == "no") {
        echo "<h4>Kayıt İşlemi Başarısız...</h4>";
    }
    ?>

    <form class="form" action="islem.php" method="post">
        <input type="text" name="kullaniciAdi" placeholder="İsminiz" required><br>
        <input type="text" name="kullaniciSoyadi" placeholder="Soyisminiz" required><br>
        <input type="text" name="kullaniciMail" placeholder="Mail Adresiniz" required><br>
        <input type="password" name="kullaniciParola" placeholder="Parolanız" required><br>
        <input type="text" name="kullaniciYas" placeholder="Yaşınız"><br>
        <button type="submit" name="insertislemi">Kayıt Et</button>
    </form>

    <br><br><br>

    <h2>Veritabanı PDO Güncelleme İşlemleri</h2>
    <hr>
    <table width="60%"align="center" border=3>
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Mail</th>
            <th>Parola</th>
            <th>Yaş</th>
            <th>İşlem</th>
        </tr>

        <?php

		$bilgilerimsor=$db->prepare("SELECT * from kullanici");
		$bilgilerimsor->execute();

		$say=0;

		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {?>

		<tr>
			<td><?php echo $bilgilerimcek['kullaniciID'] ?></td>
			<td><?php echo $bilgilerimcek['kullaniciAdi'] ?></td>
			<td><?php echo $bilgilerimcek['kullaniciSoyadi'] ?></td>
			<td><?php echo $bilgilerimcek['kullaniciMail'] ?></td>
			<td><?php echo $bilgilerimcek['kullaniciParola'] ?></td>
            <td><?php echo $bilgilerimcek['kullaniciYas'] ?></td>
			<td align="center">
                <a href="islem.php?kullaniciID=<?php echo $bilgilerimcek["kullaniciID"]?> & bilgilerimsil=ok"><button>Sil</button></a>
                <a href="?kullaniciID=<?php echo $bilgilerimcek["kullaniciID"]?> & duzenle=ok"><button>Düzenle</button></a>
            </td>
		</tr>
		<?php } ?> 
    </table>
    <?php 
	if ($_GET['silme']=="ok") {	
		echo "<h4>Silme işlemi başarılı</h4>";
	} elseif ($_GET['silme']=="no") {
		echo "<h4>İşlem başarısız</h4>";
	}
	?>
<br><br><br>

    

	<?php 
	$bilgilerimsor=$db->prepare("SELECT * FROM kullanici WHERE kullaniciID=:id");
	$bilgilerimsor->execute(array(
		'id' => $_GET['kullaniciID']
	));

	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

	?>
    <h2>Veritabanı PDO Güncelleme İşlemleri</h2>
    <hr>

    <?php 
	if ($_GET['durum']=="ok") {	
		echo "<h4>Güncelleme işlemi başarılı</h4>";
	} elseif ($_GET['durum']=="no") {
		echo "<h4>İşlem başarısız</h4>";
	}
	?>

    <form class="form" style="margin: 50px 0px 100px 0px;" action="islem.php" method="POST">
        <input style="width:20px;" type="text" name="kullaniciID" value="<?php echo $bilgilerimcek['kullaniciID'] ?>" readonly>
        <input type="text" name="kullaniciAdi" value="<?php echo $bilgilerimcek['kullaniciAdi'] ?>">
        <input type="text" name="kullaniciSoyadi" value="<?php echo $bilgilerimcek['kullaniciSoyadi'] ?>">
        <input type="text" name="kullaniciMail" value="<?php echo $bilgilerimcek['kullaniciMail'] ?>">
        <input type="text" name="kullaniciParola" value="<?php echo $bilgilerimcek['kullaniciParola'] ?>">
        <input type="text" name="kullaniciYas" value="<?php echo $bilgilerimcek['kullaniciYas'] ?>">
        <input type="submit" value="GÜNCELLE" name="uptadeislemi">
    </form>
    
</html>