<?php

function ubahFormatWaktu($time) {
    $hour = (int)substr($time, 0, 2);
    $minute = substr($time, 3, 2);
    $meridian = $hour >= 12 ? 'pm' : 'am';
    $hour = $hour % 12;
    if ($hour === 0) {
        $hour = 12;
    }
    return "$hour:$minute $meridian";
}

$time1 = '19:00';
$time2 = '23:45';
$time3 = '08:55';

echo ubahFormatWaktu($time1) . "\n";
echo ubahFormatWaktu($time2) . "\n";
echo ubahFormatWaktu($time3) . "\n";

?>