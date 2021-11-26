<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei impresso? <br>"; // só executa a primeira linha depois do if
    echo "Serei impresso novamente? <br>";
}

if(false) {
    echo "Serei impresso? <br>"; // só executa a primeira linha depois do if
    echo "Serei impresso novamente? <br>";
}

if("") {
    echo "Serei impresso? <br>"; // só executa a primeira linha depois do if
    echo "Serei impresso novamente? <br>";
}

if(" ") {
    echo "Serei impresso? <br>"; // só executa a primeira linha depois do if
    echo "Serei impresso novamente? <br>";
}

if(true) 

echo "alguma coisa <br>";

{
    echo "Serei impresso? <br>"; // só executa a primeira linha depois do if
    echo "Serei impresso novamente? <br>";
}

if(false);

{
    echo "Serei impresso? <br>"; // só executa a primeira linha depois do if
    echo "Serei impresso novamente? <br>";
}

if(false)
    echo "Verdadeiro <br>";
else
    echo "Falso <br>";

echo "Fim <br>";

if(true) {
    echo "Verdadeiro <br>";
} else {
    echo "Falso <br>";
}
echo "Fim <br>";

if(false) {
    echo "Passo A <br>";
} elseif(false) {
    echo "Passo B <br>";
} elseif (false) {
    echo "Passo C <br>";
} else {
    echo "Último Passo <br>";
}