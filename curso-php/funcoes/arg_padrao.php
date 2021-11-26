<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)',$sobrenome = 'Ciente') {
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL,null);
echo saudacao('Mestre','Supremo');

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida<br>";
    echo "Para beber: $bebida<br>";
}

anotarPedido('Hamburbuer');
anotarPedido('Pizza','Refrigerante');