<?php
$jam = 16;
$menit = 00;

function tentukanWaktu($jam, $menit) {
    $waktuSekarang = $jam * 100 + $menit;

    if ($waktuSekarang >= 700 && $waktuSekarang < 1130) {
        return "waktu kerja";
    } elseif ($waktuSekarang >= 1130 && $waktuSekarang < 1215) {
        return "waktu istirahat";
    } elseif ($waktuSekarang >= 1215 && $waktuSekarang < 1601) {
        return "waktu kerja";
    } else {
        return "bukan waktu kerja";
    }
}

$menitFormatted = $menit < 10 ? "0" . $menit : $menit;
echo "Saat ini pukul " . $jam . ":" . $menitFormatted . " maka sekarang merupakan " . tentukanWaktu($jam, $menit) . ".";
?>