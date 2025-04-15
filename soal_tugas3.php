<?php 

$detik = 12345;

$jam = floor($detik / 3600);
$menit = floor(($detik % 3600) / 60);
$detik = $detik % 60;


echo "Waktu dalam satuan jam:menit:detik adalah $jam:$menit:$detik.";

?>