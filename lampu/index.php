<?php
require 'user.php';
$lampu = new lampu;
echo "<h3>-Lampu-";
echo "<br/>";
$lampu->daya="Daya : 25 Watt";
echo $lampu->daya;
echo "<br/>";
$lampu->jenis="Jenis : LED";
echo $lampu->jenis;
echo "<br/>";
$lampu->warna="Warna : Putih";
echo $lampu->warna;
echo "<br/>";