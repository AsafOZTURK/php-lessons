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
			<td align="center"><a href=""><button>Sil</button></a><a href=""><button>Düzenle</button></a></td>
		</tr>
		<?php } ?> 
    </table>
</html>