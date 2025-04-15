<?php 

function hitungGaji($golongan, $jamKerja) {
    $upahBiasa = 0;
    switch ($golongan) {
        case 1:
            $upahBiasa = 3000;
            break;
        case 2:
            $upahBiasa = 3500;
            break;
        case 3:
            $upahBiasa = 4000;
            break;
        case 4:
            $upahBiasa = 5000;
            break;
        default:
            return "Golongan tidak valid";
    }
    if ($jamKerja <= 40) {
        $gaji = $jamKerja * $upahBiasa;
    } else {
        $gaji = 40 * $upahBiasa + ($jamKerja - 40) * 1.5 * $upahBiasa;
    }
    return $gaji;
}

$gajiKaryawan = array();
$gajiKaryawan[] = hitungGaji(1, 35);
$gajiKaryawan[] = hitungGaji(2, 45);
$gajiKaryawan[] = hitungGaji(3, 50);
$gajiKaryawan[] = hitungGaji(4, 30);

echo "Gaji mingguan karyawan:\n";
for ($i = 0; $i < count($gajiKaryawan); $i++) {
    echo "Golongan " . ($i + 1) . ": " . $gajiKaryawan[$i] . " rupiah\n";
}

?>