<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo!';
}

echo obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>' . obterMensagem();
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Tiago');

function soma($a,$b) {
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(4,5);
echo '<br>', soma($x,$y);

function trocaValor($a,$novovalor) {
    $a = $novovalor;
}

$variavel = 1;
trocaValor($variavel,3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a,$novovalor) {
    $a = $novovalor;
}

trocaValorDeVerdade($variavel,5);
echo '<br>', $variavel;