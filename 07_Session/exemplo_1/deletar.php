<?php

session_start();

// remover da lista
// remover apenas 1 item
// unset($_SESSION['nome']); // remover uma posição da session
// unset($_SESSION['turma'][1]); // remover UM item da lista

session_destroy(); // apagar tudo de uma vez

echo "<h4> Após Remover </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";