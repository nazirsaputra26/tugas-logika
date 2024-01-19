<?php
$jam = 11;
$menit = 00;

if (($jam >= 7 && $jam < 11 && $menit >= 00) || ($jam == 11 && $menit < 30) || ($jam >= 12 && $jam < 16 && $menit >= 15) || ($jam >= 17 && $jam <= 23) || ($jam >= 00 && $jam < 7)) {
    echo "Saat ini bukan merupakan waktu kerja.\n";
} else {
    echo "Saat ini adalah waktu kerja.\n";
}
?>
