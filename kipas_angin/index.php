<?php
require 'user.php';
$kipas_angin = new kipas_angin();
echo "<h3>-KIPAS ANGIN-";
echo "<br/>";
$kipas_angin->Bentuk="Bentuk : Bulat";
echo $kipas_angin->Bentuk;
echo "<br/>";
$kipas_angin->Ukuran="Ukuran : 30 Cm";
echo $kipas_angin->Ukuran;
echo "<br/>";
$kipas_angin->Warna="Warna : Biru";
echo $kipas_angin->Warna;
echo "<br/>";