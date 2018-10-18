<?php
//constantes
define("NOME", "Pedro Henrique");
define("IDADE",23);
define("ALTURA",1.70);
define("CASADO",false);

define("TIMES", ['vasco', 'fluminense', 'santos']);

echo 'Meu nome é '.NOME.', tenho '.IDADE.' anos e '.ALTURA.' de altura';

echo "<hr>";
echo TIMES[1];
echo "<hr>";
var_dump(TIMES);
echo "<hr>";
function exibeNome() {
  echo NOME;
}

exibeNome();
