<?php 

// $jam_kerja = 8;
// $jam_makan = 20;
// $jam_sholat = 30;

// if ($jam_kerja == 8 && $jam_makan <= 30) {
//     echo "jam makan";
// } else if ($jam_sholat >= 30 && $jam_makan <= 20) {
//     echo "jam sholat";
// } else {
//     echo "jam istirahat";
// }

function hitungWaktuKerja($jamKerja, $jamIstirahatShalat, $jamIstirahatMakan) {
    $waktuKerja = $jamKerja * 60; // konversi jam kerja ke menit
    $waktuIstirahatShalat = $jamIstirahatShalat; // waktu istirahat shalat dalam menit
    $waktuIstirahatMakan = $jamIstirahatMakan; // waktu istirahat makan dalam menit
    $totalWaktuIstirahat = $waktuIstirahatShalat + $waktuIstirahatMakan; // total waktu istirahat dalam menit
    $waktuKerjaEfektif = $waktuKerja - $totalWaktuIstirahat; // waktu kerja efektif dalam menit
    return $waktuKerjaEfektif;
}

// Contoh penggunaan fungsi
$waktuKerjaEfektif = hitungWaktuKerja(8, 20, 30);
echo "Waktu kerja efektif: " . $waktuKerjaEfektif . " menit";



?> 