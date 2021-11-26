<div class="titulo">Desafio Palindromo</div>

<?php
// function palindromo($palavra) {
//     $ultimoIndice = strlen($palavra) - 1;
//     for($i = 0; $i <= $ultimoIndice; $i++) {
//         if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
//             return "não";
//         }
//     }
//     return "sim";
// }

// function 
// echo palindromo('arara') . '<br>';
// echo palindromo('bola') . '<br>';



function palindromo($texto) {
    return $texto === strrev($texto);
}

if(palindromo("subinoonibus")) {
    echo "palindromo";
} else {
    echo "não palindromo";
}