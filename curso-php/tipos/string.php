<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string :3';
echo '<br>';
var_dump("Eu também :D"); // conta com o acento :c
echo '<br>';

// concatenação
echo ("Nós também" . ' somos uwu' . "<br>");
echo ("Número é" . 123);
echo '<br>', "Também aceito", " vírgulas", " >.<"; // só funciona no echo :c

echo '<br>';
echo " 'Teste' " . ' "Teste" ' . ' \'Teste\' ' . " \"Teste\" " . "\\";

print("<br>Tabém existe a função print :P");
print"<br>Tabém existe a função print :P";

//algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maiúscula u.u');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também :D","utf-8");
echo '<br>' . substr('Só uma parte mesmo',7,6); //lê uma parte
echo '<br>' . substr('Só uma parte mesmo',7); //lê uma parte
echo '<br>' . str_replace('isso','aquilo','Trocar isso isso');