<?php
// Input jumlah kilometer
$jumlah_km = 100;

// Input jumlah bahan bakar pada kilometer pertama
$jumlah_bahan_bakar = 10;

// Menghitung jumlah bahan bakar yang dihabiskan pada setiap kilometer
for ($i = 2; $i <= $jumlah_km; $i++) {
    $jumlah_bahan_bakar *= 0.8;
}


// Menampilkan hasil
echo "Total bahan bakar yang dihabiskan setelah mencapai $jumlah_km km adalah $jumlah_bahan_bakar kg.";
return round($jumlah_bahan_bakar);
?>