<?php
//Arrays
$carros = array(5=>"BMW","Veloster", "Hilux");
$carros[] = "Fusion";
$carros[100] = "Classe A";
print_r($carros);
echo "<hr>";
echo($carros[6]);

echo "<hr>";

$motos = array();

$motos[1] = ("Indian");
$motos[] = "Caloi";
$motos[] = "Harley";
$motos[10] = "Bugatti";
print_r($motos);
echo "<br>";
echo $motos[3];

echo "<hr>";

$clientes = array("João","Maria","Antônia");
print_r($clientes);
echo "<hr>";

// count

echo count($clientes)." / ";
// ou
$totalClientes = count($clientes);
echo $totalClientes;

echo "<hr>";

foreach ($carros as $valor) {
 echo $valor."<br>";
}

echo "<hr>";

// arrays associativos

$pessoas = array("nome" => "Pedro", "idade" => 23, "altura" => 1.70);
$pessoas["cidade"] = "Itaoca";
echo $pessoas["nome"];
echo "<hr>";
print_r($pessoas);
echo "<hr>";
foreach ($pessoas as $indice => $valor) {
  echo $indice.":".$valor."<br>";
}
echo "<hr>";
// arrays multidimensionais
$times = array(
  "cariocas" => array("campeão"=>"vasco","vice"=>"flamengo", "terceiro"=>"botafogo"),
  "paulistas"=> array("santos", "são paulo", "palmeiras"),
  "baianos" => array("bahia", "vitoria","itabuna")
);

echo $times["paulistas"][0];
echo "<hr>";
foreach ($times["cariocas"] as $key => $value) {
  echo $key.":".$value."<br>";
}

?>
