<?php
require 'user.php';
$AC = new AC();
echo "<h3>-AC RUANGAN-";
echo "<br/>";
$AC->Merk="Merk : Toshiba";
echo $AC->Merk;
echo "<br/>";
$AC->Bentuk="Bentuk : Persegi Panjang";
echo $AC->Bentuk;
echo "<br/>";
$AC->Warna="Warna : Putih";
echo $AC->Warna;
echo "<br/>";