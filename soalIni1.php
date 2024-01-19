<?php 

function hitungPembagian($angka, $pembagi) {
    $hasil = $angka % $pembagi;
    if ($hasil == 0) {
        return true;
    } else {
        return false;
    }
}

function cekPembagian($angka) {
    $pembagian = array();
    if (hitungPembagian($angka, 3)) {
        array_push($pembagian, 3);
    }
    if (hitungPembagian($angka, 5)) {
        array_push($pembagian, 5);
    }
    if (hitungPembagian($angka, 7)) {
        array_push($pembagian, 7);
    }
    if (hitungPembagian($angka, 10)) {
        array_push($pembagian, 10);
    }
    return $pembagian;
}

// Contoh penggunaan fungsi
$pembagian = cekPembagian(1000);
if (count($pembagian) == 1 && $pembagian[0] == 5) {
    echo "Angka 1000 bisa dibagi dengan angka 5 saja";
} elseif (count($pembagian) == 2 && in_array(5, $pembagian) && in_array(10, $pembagian)) {
    echo "Angka 1000 bisa dibagi dengan angka 5 dan 10";
} else {
    echo "Angka 1000 tidak bisa dibagi dengan angka 3, 5, 7, dan 10";
}


// function pembagian($nomor,$pembagi){
//     $hasil = array();
//     foreach($pembagi as $bagi) {
//         if ($nomor / $bagi == 0){
//         array_push($hasil, $bagi);
//         }
//     }
//     return $hasil;
// }

// function cetak($hasil){
//     if (count($hasil) == 0){
//         echo "Angka 1000 tidak bisa dibagi dengan angka 3,5,7,dan 10";
//     }else{
//         echo "Angka 1000 bisa dibagi dengan angka " . implode(", ", $hasil);
//     }
// }

// $pembagi = array(3,5,7,10);
// $hasil = pembagian(1000, $pembagi);
// cetak($hasil)



?>