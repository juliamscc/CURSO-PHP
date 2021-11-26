<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria", //preferência para o array mais a esquerda
    "naturalidade" => "Fortleza"
];

$dados2["endereco"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

echo "{$dadosCompletos['idade']}";
echo '<br>';

unset($dadosCompletos["nome"]);
print_r($dadosCompletos);
echo '<br>';

unset($dadosCompletos);
var_dump($dadosCompletos);
echo '<br>';

$impares = [1,3,5,7,9];
$pares = [0,2,4,6];

$decimais = $pares + $impares;
print_r($decimais);
echo '<br>';

$decimais = array_merge($pares,$impares);
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);