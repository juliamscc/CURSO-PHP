<div class="titulo">Desafio Equação</div>

<?php

// ((((6 * (3 + 2)) **2) / (3 * 2)) - ((((1 - 5) * (2 - 7)) / 2) **3)) / (10 **3)

// $fracao1 = ((6 * (3 + 2)) **2) / (3 * 2);
// $fracao2 = ((1 - 5) * (2 - 7)) / 2;

// $numerador = $fracao1 - ($fracao2 **2);
// $denominador = 10 **3;

// echo ($numerador **3) / $denominador;


$numA = (6 * (3 + 2)) **2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) **2;

$superior = ($superiorA - $superiorB) **3;
$inferior = 10 **3;

$final = $superior / $inferior;

echo "O resultado final é" . $final . ".";