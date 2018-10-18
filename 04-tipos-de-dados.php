<?php
// escalares
// string
$nome = "Pedro";
var_dump($nome);

if (is_string($nome)) {
  echo "É uma String";
} else {
  echo "Não é uma String";
}

echo "<hr>";

// inteiros
$idade = 10;
var_dump($idade);
if (is_int($idade)) {
  echo "É um inteiro";
}else {
  echo "não é um inteiro";
}

echo "<hr>";

// float
$dinheiro = 1.99;
var_dump($dinheiro);
if (is_float($dinheiro)) {
  echo "É um Float";
}else {
  echo "Não é um float";
}
echo "<hr>";
//boolean
$admin = false;
var_dump($admin);
if (is_bool($admin)) {
  echo "É boolean";
}else {
  echo "Não é boolean";
}
echo "<hr>";

// arrays
$carros = array("gol","palio","ka","onix",12,20.4,true);
var_dump($carros);
echo "<hr>";

if (is_array($carros)) {
  echo "É um array";
}else {
  echo "Não é array";
}
echo "<hr>";

// object
class Cliente {
  public $nome;
  public function atribuirNome($nome){
    $this->$nome = $nome;
  }
}

$cliente = new Cliente();
$cliente->atribuirNome("Pedro");
var_dump($cliente);

if (is_object($cliente)) {
  echo "É um objeto";
}else {
  echo "Não é objeto";
}
echo "<hr>";

// especiais
$cidade = null;
var_dum($cidade);

echo "<hr>";

// resource


 ?>
