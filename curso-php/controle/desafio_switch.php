<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name = "param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="milha-metro">Milha > Metros</option>
        <option value="metro-milha">Metros > Milha</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
$valor = (float) $_POST['param'];
const  FATOR_MILHA_KM = 1.60934;
const  FATOR_METRO_KM = 1000;

switch($_POST['conversao']) {
    case 'km-milha':
        $resultado = $valor / FATOR_MILHA_KM;
        $resultadoFormatado = number_format($resultado, 5, ',','.');
        $valorFormatado = number_format($valor, 5, ',','.');
        $mensagem = "$valorFormatado km = $resultadoFormatado milha(s)";
        break;
    case 'milha-km':
        $resultado = $valor * FATOR_MILHA_KM;
        $resultadoFormatado = number_format($resultado, 5, ',','.');
        $valorFormatado = number_format($valor, 5, ',','.');
        $mensagem = "$valorFormatado milha(s) = $resultadoFormatado km";
        break;
    case 'metro-km':
        $resultado = $valor / FATOR_METRO_KM;
        $resultadoFormatado = number_format($resultado, 5, ',','.');
        $valorFormatado = number_format($valor, 5, ',','.');
        $mensagem = "$valorFormatado m = $resultadoFormatado km";
        break;
    case 'km-metro':
        $resultado = $valor * FATOR_METRO_KM;
        $resultadoFormatado = number_format($resultado, 5, ',','.');
        $valorFormatado = number_format($valor, 5, ',','.');
        $mensagem = "$valorFormatado km = $resultadoFormatado m";
        break;
    case 'milha-metro':
        $resultado = $valor * (FATOR_MILHA_KM * 1000);
        $resultadoFormatado = number_format($resultado, 5, ',','.');
        $valorFormatado = number_format($valor, 5, ',','.');
        break;
    case 'metro-milha':
        $resultado = $valor / (FATOR_MILHA_KM * 1000);
        $resultadoFormatado = number_format($resultado, 5, ',','.');
        $valorFormatado = number_format($valor, 5, ',','.');
        $mensagem = "$valorFormatado m = $resultadoFormatado milha(s)";
        break;
    case 'c-f':
        $resultado = ($valor - 32) * 5 / 9;
        $mensagem = "$valor graus Celsius = $resultado graus Fahrenheit";
        break;
    case 'f-c':
        $resultado = ($valor * 9 / 5) + 32;
        $mensagem = "$valor graus Fahrenheit = $resultado graus Celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado.";
}

echo "<p>$mensagem</p>";