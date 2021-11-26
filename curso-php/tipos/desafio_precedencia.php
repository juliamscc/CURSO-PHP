<div class="titulo">Desafio Precedência</div>

<?php
echo '<p>Qual valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
// 2 + 15 + 2 / (-8 + 8)
// 17 + 2 / 0
//INF

echo '<p>Qual expressão imprime o valor 100?</p>'; //b
echo 'a)', (1 + 2) * 20 - 15, '<br>';
// 3 * 20 - 15
// 60 - 15
// 45
echo 'b)', 4 * 5 ** 2, '<br>';
// 4 * 25
// 100
echo 'c)', 2 ** 3 ** 4 / 1e25, '<br>';
// complicado :/ se vira aí, computador >:T
echo 'd)', 3 + (3 * 8) / 2 - 3;
// 3 + 24 / 2 - 3
// 24 / 2
// 12