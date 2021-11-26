<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1  + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int
echo '<p>Float pra int</p>';
var_dump((int) 2.8);
echo '<br>';
var_dump(intval('11010101101', 2));
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump(round(2.8)); //arredonda o número mas não realiza casting
echo '<br>';
var_dump((int) round(2.8)); // casting

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); // php considera como soma e não concatenação
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2); // concatenação
echo '<br>' . is_string("3" . 2);
echo '<br>' . is_string("3" + 2); // false
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "cinco 5"); // só considera o primeiro caractere
echo '<br>';
var_dump(1 + "2+5"); // só considera o primeiro caractere até não ter mais número
echo '<br>';
var_dump(1 + "25");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");