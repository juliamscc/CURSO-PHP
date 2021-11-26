<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE; //não aparece no browser

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('False');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

//regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas 0 é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); //false
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!"false"); // negação
echo '<br>' . var_dump(!!"false"); // dupla negação