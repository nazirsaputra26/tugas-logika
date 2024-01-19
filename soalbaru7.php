<?php 

$count = 0;

for ($i = 3; $i <= 30; $i++) {
    if (90 % $i == 0 && $i % 3 == 0) {
        $count++;
    }
}

echo "Ada " . $count . " kemungkinan bilangan 90 bisa dibagi habis dengan bilangan kelipatan 3 dari rentang 3-30.";

?>