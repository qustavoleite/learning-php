<?php
$N = 6;
$H = 120;
$alturas = [200, 90, 100, 123, 120, 169];

$count = 0;
foreach ($alturas as $altura) {
    if ($H >= $altura) {
        $count++;
    }
}

echo "pode andar em $count brinquedos.\n";
?>