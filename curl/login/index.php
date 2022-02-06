<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login İşlemleri</title>
    <style>
        .container {
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <?php

    if (isset($_SESSION['kullanici_ad'])) { ?>

        <h2>Giriş Başarılı</h2>
        <p>Hoşgeldin: <?php echo $_SESSION['kullanici_ad']; ?></p>
        <a href="logout.php">Çıkış yap</a>

    <?php } else { ?>

        <div class="container">
            <form action="islem.php" method="post">
                <label>Kullanıcı Adı</label>
                <input type="text" name="kullanici_ad"><br>
                <label>Kullanıcı Parola</label>
                <input type="pass" name="kullanici_pass"><br>
                <button type="submit" name="login">Giriş Yap</button>
            </form>
            <a href="curl.php">Bot girişi yap</a>
        </div>
    <?php } 
    ?>

</body>
</html>