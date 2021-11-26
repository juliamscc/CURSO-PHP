<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o método
// que a posição do texto 'abc' na string '!AbcaBcabc' retorna 1

echo stripos('!AbcaBcabc','abc');
echo '<br>' . strpos(strtolower('!AbcaBcabc'),'abc');