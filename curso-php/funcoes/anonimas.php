<div class="titulo">Funções Anônimas</div>

<?php
$soma = function($a,$b) {
    return $a + $b;
};

echo $soma(1,2) . '<br>';

$multiplicacao = function($a,$b) {
    return $a * $b;
};

$divisao = function($a,$b) {
    return $a / $b;
};

function executar($a,$b,$op,$funcao) {
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado";
}


executar(2,3,'+',$soma);
echo '<br>';
executar(2,3,'*',$multiplicacao);
echo '<br>';
executar(9,3,'/',$divisao);
echo '<br>';