<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    echo "YOk";

} else {
    echo $_SERVER['HTTP_REFERER'];
}
?>