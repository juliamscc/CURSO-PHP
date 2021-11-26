<div class="titulo">Desafio PI</div>

<?php
// echo pi();

// echo'<br>';
// var_dump($piMin);
// var_dump(pi());

$pi = 3.14;
// $piMin = 3.14;

// if($pi >= $piMin && $pi <= pi()) {
//     echo "<br>É pi!";
// } else {
//     echo "<br>Não é pi!";
// }

//Operador Relacional
$piErrado = 2.8;

//resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo "<br>Praticamente iguais!";
} else {
    echo "<br>Valor errado!";
}