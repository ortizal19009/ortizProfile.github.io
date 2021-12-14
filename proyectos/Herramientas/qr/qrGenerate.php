<?php 
include './phpqrcode/qrlib.php';

$dir = './temp/';

if(!file_exists($dir)){
    mkdir($dir);
}
$filename = $dir.'test.png';

$tamaño = 10;
$level = 'L';
$framSize = 3;
$contenido = "google.com";
QRcode::png($contenido, $filename, $level, $tamaño, $framSize);
echo '<img src="'.$dir.basename($filename).'"/><hr/>';


?>