<?php 

// Buatlah urutan perkalian 1 * 1 = 1 sampai dengan 3 * 10 = 30
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;
        echo "$i * $j = $hasil\n<br>";
    }
}



?>