<?php 

function convert_to_12_hour_format($time) {
    return date('h:i a', strtotime($time));
}

$time1 = '19:00';
$time2 = '23:45';
$time3 = '08:55';

echo convert_to_12_hour_format($time1) . "\n";
echo convert_to_12_hour_format($time2) . "\n";
echo convert_to_12_hour_format($time3) . "\n";

?>