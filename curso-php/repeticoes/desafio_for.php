<div class="titulo">Desafio For</div>

<!--
    Usar o for para imprimir:
    
    #
    ##
    ###
    ####
    #####
    
    1) Pode usar incremento $i++
    2) Não pode usar incremento $i++
-->

<?php
for($i = 0; $i < 5; $i++) {
    for($j = 0; $j <= $i; $j++) {
        echo '#';
    }
    $j = 0;
    echo '<br>';
}

echo '<hr>';

$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#'){
    echo "$impressao2 <br>";
}