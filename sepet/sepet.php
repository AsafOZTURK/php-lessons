<?php
include "urunler.php";
$say = 0;
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <title>Üyeliksiz Sepet İşlemleri</title>
    <style>
        html {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Sepet <a href="index.php"><button class="btn btn-primary btn-sm">Anasayfa</button></a>
            <hr>
        </h2>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ürün Resim</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Ürün Fiyat</th>
                    <th scope="col">Ürün Adet</th>
                    <th scope="col">Toplam Fiyat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($_COOKIE['sepet']) > 0) { ?>

                    <form action="islem.php" method="GET">
                        <?php
                        foreach ($_COOKIE['sepet'] as $key => $value) {
                            $say++;
                            $toplam += $kurslar[$key]['fiyat'] * $value; ?>
                            <tr>
                                <td><?php echo $say; ?></td>
                                <td><img width="100" src="<?php echo $kurslar[$key]['resim']; ?>"> </td>
                                <td><?php echo $kurslar[$key]['ad']; ?></td>
                                <td><?php echo $kurslar[$key]['fiyat']; ?> ₺</td>
                                <td><input style="width:50px;" type="number" min="1" value="<?php echo $value ?>" name="urun[<?php echo $key ?>][]"></td>
                                <td><?php echo $kurslar[$key]['fiyat'] * $value ?> ₺</td>
                                <td><a href="islem.php?sil=ok&id=<?php echo $key ?>"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>Sepet Toplamı</b></td>
                            <td><b><?php echo $toplam; ?></b></td>
                        </tr>
                    <?php }
                    ?>
            </tbody>
        </table>

        <div align="right">
            <button type="submit" name="sepetguncelle" class="btn btn-warning">Sepeti Güncelle</button>
            </form>
            <button class="btn btn-success">Ödeme İşlemine Geç</button>
            <div>
            </div>
</body>

</html>