<?php
$luas_persegi = 25;
$sisi_persegi = sqrt($luas_persegi);
$keliling_persegi = 4 * $sisi_persegi;

echo "Panjang sisi persegi dengan luas $luas_persegi cm^2 adalah $sisi_persegi cm.\n";
echo "Keliling persegi dengan panjang sisi $sisi_persegi cm adalah $keliling_persegi cm.\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$i\n";
}
?>
