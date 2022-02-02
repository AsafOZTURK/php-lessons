<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Beni Hatırla Uygulaması</title>
</head>

<body>
    <div class="container">
        <h1>Beni Hatırla Uygulaması</h1>
        <hr>
        <?php
        if ($_GET['giris'] == "no") { ?>

            <div class="alert alert-danger">
                <p>Giriş Başarısız! Kullanıcı adı ya da şifre hatalı</p>
            </div>

        <?php } else if ($_GET['giris'] == "cikis") { ?>

            <div class="alert alert-success">
                <p>Başarıyla çıkış yaptınız</p>
            </div>

        <?php }
        ?>

        <?php
        if (isset($_SESSION['nickname'])) { ?>

            <div class="alert alert-success">
                <b>Giriş Başarılı!</b>
                <p>Hoşgeldin <?php echo $_SESSION['nickname']; ?></p>
            </div>
            <a href="cikis.php"><button class="btn btn-danger">Çıkış Yap</button></a>


        <?php } else { ?>
            <form action="islem.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="nickname" aria-describedby="emailHelp" 
                    <?php 
                    if ($_COOKIE['nickname']) {?>
                        value="<?php echo $_COOKIE['nickname']; ?>"
                    <?php } else { ?>
                        placeholder="Kullanıcı adınızı giriniz"
                    <?php }
                    ?>
                    >
                </div>
                <div class="mb-3">
                    <label class="form-label">Şifre</label>
                    <input type="password" class="form-control" name="parola"
                    <?php 
                    if ($_COOKIE['parola']) {?>
                        value="<?php echo $_COOKIE['parola']; ?>"
                    <?php } else { ?>
                        placeholder="Şifrenizi giriniz"
                    <?php }
                    ?>
                    >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="benihatirla" <?php echo isset($_COOKIE['parola']) ? "checked" : "" ?>
                    <label class="form-check-label">Beni Hatırla</label>
                    <i class="bi bi-fingerprint"></i>
                </div>
                <button type="submit" name="kullanicigiris" class="btn btn-primary">Giriş Yap</button>
            </form>
        <?php }
        ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>