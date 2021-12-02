<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST" style="margin-top: 10%;">
    İsim <input type="text" name="form_isim" required><br>
    Soyisim <input type="text" name="soyisim"><br>
    <input type="submit" value="Gönder">
    </form>
    </center>

    <?php  //POST İLE VERİ ALMA
    $isim = $_POST[form_isim];
    echo $isim;
    ?>

    <center>
    <form action="" method="GET" style="margin-top: 10%;">
    İsim <input type="text" name="form_isim" required><br>
    Soyisim <input type="text" name="soyisim"><br>
    <input type="submit" value="Gönder">
    </form>
    </center>

    <?php //GET İLE VERİ ALMA
    $isim = $_POST[form_isim];
    echo $isim;
    ?>
</body>
</html>