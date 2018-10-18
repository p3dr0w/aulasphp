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
?>
