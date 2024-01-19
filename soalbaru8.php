<?php 

$usia = 6.25;
$nilai_matematika = 83;
$nilai_bahasa_indonesia = 87;
$nilai_rata_rata = ($nilai_matematika + $nilai_bahasa_indonesia) / 2;

if ($usia >= 16 && $usia <= 25 && $nilai_matematika >= 87 && $nilai_bahasa_indonesia >= 85 && $nilai_rata_rata >= 85) {
    echo "Anda diterima di ikatan dinas.";
} else {
    echo "Maaf, Anda tidak memenuhi syarat untuk mendaftar ikatan dinas.";
}

?>