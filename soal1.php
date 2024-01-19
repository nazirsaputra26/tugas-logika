<?php

    $tahunSekarang = 2024; 
    $usiaAndi = 16;

    $tahunLahirAndi = $tahunSekarang - $usiaAndi;
    $tahunLahirDani = $tahunLahirAndi; 
    $usiaBeni = $usiaAndi + 3;
    $tahunLahirBeni = $tahunSekarang - $usiaBeni;
    $usiaEko = $usiaBeni - 5; 
    $tahunLahirEko = $tahunSekarang - $usiaEko;

    function apakahTahunKabisat($tahun) {
        return ($tahun % 4 == 0) && ($tahun % 100 != 0 || $tahun % 400 == 0);
    }

    $andiLahirTahunKabisat = apakahTahunKabisat($tahunLahirAndi) ? "Ya" : "Tidak";
    $ekoLahirTahunKabisat = apakahTahunKabisat($tahunLahirEko) ? "Ya" : "Tidak";

    echo "Tahun kelahiran Andi: $tahunLahirAndi - Tahun Kabisat: $andiLahirTahunKabisat\n";
    echo "Tahun kelahiran Beni: $tahunLahirBeni\n";
    echo "Tahun kelahiran Dani: $tahunLahirDani\n";
    echo "Tahun kelahiran Eko: $tahunLahirEko - Tahun Kabisat: $ekoLahirTahunKabisat\n";


    if ($andiLahirTahunKabisat == "Ya" && $ekoLahirTahunKabisat == "Tidak") {
        echo "Andi lahir di tahun kabisat, tetapi Eko tidak.\n";
    } elseif ($andiLahirTahunKabisat == "Tidak" && $ekoLahirTahunKabisat == "Ya") {
        echo "Eko lahir di tahun kabisat, tetapi Andi tidak.\n";
    } else {
        echo "Baik Andi maupun Eko tidak lahir di tahun kabisat.\n";
    }
?>