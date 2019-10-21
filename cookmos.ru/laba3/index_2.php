<?php
include 'rb.php';
$CM='./index.html';
$result= str_replace($search, $replace, file_get_contents($CM));
echo $result;