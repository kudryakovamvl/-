<?php
include 'rb.php';// подключаем содержимое файла rb.php
$CM='./dishes.html';
$result= str_replace($search, $replace, file_get_contents($CM));
echo $result;
?>