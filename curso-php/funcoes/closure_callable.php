<div class="titulo">Closure e Callable</div>

<?php
$soma1 = function ($a,$b) {
    return $a + $b;
};

function soma2($a,$b) {
    return $a + $b;
};

echo $soma1(2,3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2,3) . ' ';
echo (is_callable(soma2(2,3)) ? 'Sim' : 'Não') . '<br>';

// $soma1 = 1;
// echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado";
}

echo '<br>';
executar1(2, 3,'+', $soma1);
echo '<br>';
executar1(2, 3,'+', soma2);
echo '<br>';

function executar2($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado";
}

echo '<br>';
executar2(100, 100,'+', $soma1);
echo '<br>';
executar2(3000, 1000,'+', soma2);
echo '<br>';