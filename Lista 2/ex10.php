<?php
    
do {
    list($a, $b, $c) = explode(" ", readline());
} while ($a < 0.0 or $b < 0.0 or $c < 0.0);

if ($a < $b) {
    list($a, $b) = array($b, $a);
}
if ($a < $c) {
    list($a, $c) = array($c, $a);
}
if ($b < $c) {
    list($b, $c) = array($c, $b);
}

if ($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if ($a * $a == $b * $b + $c * $c) {
        echo "TRIANGULO RETANGULO\n";
    }
    if ($a * $a > $b * $b + $c * $c) {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if ($a * $a < $b * $b + $c * $c) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($a == $b and $a == $c and $a == $c) {
        echo "TRIANGULO EQUILATERO\n";
    } elseif ($a == $b or $a == $c or $b == $c) {
        echo "TRIANGULO ISOSCELES\n";
    }
}
?>
