<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$cont = 0;

while($cont < VALOR_LIMITE) {
    echo "while $cont <br>";
    $cont++;
}

$cont = 10;
do {
    echo "do-while $cont <br>";
    $cont++;
} while($cont < VALOR_LIMITE);

$cont = 0;
while(true) {
    echo "while(true) $cont <br>";
    $cont++;
    if($cont >= VALOR_LIMITE) {
        break;
    }
}