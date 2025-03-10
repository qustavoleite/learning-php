<?php
$N = 3;
$confianças = [
    [1, 15, 37],
    [42, 8, 25],
    [77, 2, 1]
];

$ordem = range(1, $N);

function calcularConfiançaTotal($ordem, $confianças) {
    $total = 1;
    for ($i = 0; $i < count($ordem); $i++) {
        $total *= $confianças[$ordem[$i] - 1][$i];
    }
    return $total;
}

function permutacoes($elementos) {
    if (count($elementos) <= 1) {
        return [$elementos];
    }
    
    $resultado = [];
    foreach ($elementos as $indice => $elemento) {
        $restantes = $elementos;
        unset($restantes[$indice]);
        foreach (permutacoes(array_values($restantes)) as $permutacao) {
            $resultado[] = array_merge([$elemento], $permutacao);
        }
    }
    return $resultado;
}

$melhorOrdem = [];
$maiorConfiança = 0;
foreach (permutacoes($ordem) as $perm) {
    $confiançaAtual = calcularConfiançaTotal($perm, $confianças);
    if ($confiançaAtual > $maiorConfiança) {
        $maiorConfiança = $confiançaAtual;
        $melhorOrdem = $perm;
    }
}

echo "Melhor ordem: " . implode(" ", $melhorOrdem) . "<br>";
?>