<?php
$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    $t1 = $i;
    $t2 = pow($t1, 2);
    $t3 = pow($t1, 3);
    echo $t1 . " " . $t2 . " " . $t3 . "\n";
}
?>
