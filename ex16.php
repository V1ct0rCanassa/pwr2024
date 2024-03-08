<?php

$renda = floatval(readline());

switch ($renda) {
    case $renda > 0 and $renda <= 2000.00:
        echo "Isento\n";
        break;
    case $renda > 2000.00 and $renda <= 3000.00:
        $imposto = ($renda - 2000)* 0.08; 
        echo "R$ ". number_format($imposto, 2, '.', '') . "\n";
        break;
    case $renda > 3000.00 and $renda <= 4500.00:
        $im = $renda - 3000; 
        $imp = 1000 * 0.08;
        $imposto = ($im * 0.18) + $imp;
        echo "R$ ". number_format($imposto, 2, '.', '') . "\n";
        break;
    case $renda > 4500.00:
        $im = $renda - 4500; 
        $imp1 = 1000 * 0.08;
        $imp2 = 1500 * 0.18;
        $imposto = ($im * 0.28) + $imp1 + $imp2;
        echo "R$ ". number_format($imposto, 2, '.', '') . "\n";
        break;
}
?>
