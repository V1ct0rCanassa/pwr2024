<?php
$resposta = 0;
$vint = 0;
$vgre = 0;
$empate = 0;
$totalgrenal = 0;
list($gre, $int) = explode(" ", readline());

while (1) {
   if($int > $gre){
       $vgre += 1;
   }else if($int < $gre){
       $vint += 1;
   }else if($gre == $int){
       $empate += 1;
   }
   $totalgrenal += 1;
   
   echo "Novo grenal (1-sim 2-nao)\n";
   
    $n = intval(readline());
    if($n == 1){
        list($gre, $int) = explode(" ", readline());
    }else if($n == 2){
        break;
    }
}
echo $totalgrenal . " grenais\n" . 
     "Inter:" . $vint . "\n" .
     "Gremio:" . $vgre . "\n" .
     "Empates:" . $empate . "\n";
if($vgre > $vint){
    echo "Gremio venceu mais\n";
}else if($vgre < $vint){
    echo "Inter venceu mais\n";
}


?>
