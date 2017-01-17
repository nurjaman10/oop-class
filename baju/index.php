<?php
require 'user.php';
$baju = new baju;
echo "<h3>-BAJU-";
echo "<br/>";
$baju->ukuran="ukuran : M";
echo $baju->ukuran;
echo "<br/>";
$baju->warna="Warna : Biru";
echo $baju->warna;
echo "<br/>";
$baju->harga="Harga : 50.000";
echo $baju->harga;
echo "<br/>";