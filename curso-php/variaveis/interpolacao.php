<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // apóstrofe não interpreta a variável
echo "<br> $numero"; // aspas interpreta a variável
echo "<br> $numero + 1";

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; // melhor evitar espaços nas {}