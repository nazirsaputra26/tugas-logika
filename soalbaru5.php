<?php 

$harga = 154000;
$diskon = 7;
$minimal_belanja = 100000;

if ($harga >= $minimal_belanja) {
    $harga_diskon = $harga - ($harga * $diskon / 100);
    echo "Harga yang harus dibayar adalah Rp." . number_format($harga_diskon, 0, ',', '.');
} else {
    echo "Maaf, Anda tidak memenuhi syarat untuk mendapatkan diskon.";
}

?>