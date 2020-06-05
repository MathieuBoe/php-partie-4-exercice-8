<?php
$n1 = 5;
$n2 = 12;
$n3 = 21;
$title = 'Exercice8';

include 'header.php';
function calcul($n1,$n2,$n3){
    echo $n1+$n2+$n3;
}
echo calcul($n1,$n2,$n3);
include 'footer.php';?>