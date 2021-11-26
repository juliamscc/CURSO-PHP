<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[0] = 'banana'; // erro
// FRUTAS[] = 'banana'; // erro
echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
// CARROS["BMW"] = '325i'; // erro
echo '<br>' . CARROS["fiat"];

define('CIDADES',array('Belo Horizonte', 'Recife'));
// CIDADES[] = 'Rio de Janeiro'; // erro
echo '<br>' . CIDADES[1];