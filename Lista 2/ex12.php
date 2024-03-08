<?php
do {
    list($a, $b, $c, $d) = explode(" ", readline());
} while ($a < 0 || $c < 0 || $b < 0 || $d < 0 || $d > 59 || $b > 59);

$hora = $c - $a;

if ($hora < 0) {
    $hora += 24;
}

$minutos = $d - $b;

if ($minutos < 0) {
    $minutos += 60;
    if ($hora > 0) {
        $hora--;
    } else {
        $hora = 23;
    }
}

if ($hora == 0 && $minutos == 0) {
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
} else {
    echo "O JOGO DUROU " . $hora . " HORA(S) E " . $minutos . " MINUTO(S)\n";
}
?>
