<?php 
require "vendor/autoload.php";

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

$surname = "John";
$name = "Doe";
$birthday = "22.01.1948";
$vaccine = "Comirnaty";
$vaccdate = "06.04.2021";
$dosenumber = 1;

$renderer = new ImageRenderer(
    new RendererStyle(400),
    new ImagickImageBackEnd()
);
$writer = new Writer($renderer);
// $writer->writeFile('Hello World!', 'qrcode.png');

$writer->writeFile($surname."\t".$name."\t".$birthday."\t".$vaccine."\t".$vaccdate."\t".$dosenumber, "qr.png");
?>
