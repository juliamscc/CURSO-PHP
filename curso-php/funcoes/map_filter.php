<div class="titulo">Map e Filter</div>

<?php
$notas = [5.8, 7.6, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}
print_r($notasFinais1);
echo '<br>';

$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);
echo '<br>';


foreach($notas as $nota) {
    if($nota >= 7){
        $aprovados[] = $nota;
    }
}
print_r($aprovados);
echo '<br>';

function aprovados($nota) {
    return $nota >= 7;
}

$aprovados2 = array_filter($notas,aprovados);
print_r($aprovados2);
echo '<br>';

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);
echo '<br>';