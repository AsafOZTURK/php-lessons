<?php
/* 
echo "POST edilen veriler burada"
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

echo "GET gönderilen veriler burada";
echo "<pre>";
print_r($_GET);
echo "</pre>";

if ($_GET['get1'] == 'asaf') {
    echo "Kayıtları göster";
}

?>