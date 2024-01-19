<?php
$panjang_tanah = 13;
$lebar_tanah = 9;
$luas_tanah = $panjang_tanah * $lebar_tanah;
if ($luas_tanah < 90) {
    echo "Luas tanah yang dimiliki Dani masuk ke dalam kategori tipe 36.";
} elseif ($luas_tanah >= 90 && $luas_tanah <= 96) {
    echo "Luas tanah yang dimiliki Dani masuk ke dalam kategori tipe 45.";
} elseif ($luas_tanah > 96 && $luas_tanah <= 120) {
    echo "Luas tanah yang dimiliki Dani masuk ke dalam kategori tipe 54.";
} elseif ($luas_tanah > 120 && $luas_tanah <= 150) {
    echo "Luas tanah yang dimiliki Dani masuk ke dalam kategori tipe 60.";
} else {
    echo "Luas tanah yang dimiliki Dani masuk ke dalam kategori tipe 70.";
}
?>
