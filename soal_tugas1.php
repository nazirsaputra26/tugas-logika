<?php 

$jam_mulai = 10;
$menit_mulai = 35;
$jam_selesai = 11;
$menit_selesai = 40;

$selisih_menit = ($jam_selesai - $jam_mulai) * 60 + ($menit_selesai - $menit_mulai);

$jam = floor($selisih_menit / 60);
$menit = $selisih_menit % 60;

echo "Selisih waktu antara $jam_mulai:$menit_mulai dan $jam_selesai:$menit_selesai adalah 
$jam jam $menit menit.";

?>