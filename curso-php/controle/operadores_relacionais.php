<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(1 == '1');
var_dump(111 === '111'); // compara o valor e o tipo
var_dump(111 != '111'); 
var_dump(111 !== '111');

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = 73;

if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}

echo "<p class='divisao'>Spaceship</p><hr>";
// utilizado em ordenações
var_dump(500 <=> 3); 
var_dump(50 <=> 50);
var_dump(5 <=> 300);

echo "<p class='divisao'>Valores podem ser T ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");