<?php 

$berat_badan = 44;
$tinggi_badan = 148;
$tinggi_badan_m = $tinggi_badan / 100;
$imt = $berat_badan / ($tinggi_badan_m ** 2);

if ($imt < 18.5) {
    echo "Berat badan kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    echo "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "Berat Badan Lebih";
} else {
    echo "Obesitas";
}

?>