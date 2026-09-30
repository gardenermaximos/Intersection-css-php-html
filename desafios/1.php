<?php

$combs = $_POST["combs"];
$gasolina = 6.20;
$etanol = 4.20;
$diesel = 6.00;
$litros = $_POST["litros"];

if($combs=="Gasolina"){
   echo "Você abasteceu $litros litros<br>";
   echo " Total a pagar: R$ ", $totalpago = $litros*$gasolina;
}else if($combs=="Etanol"){
     echo "Você abasteceu $litros litros<br>";
   echo " Total a pagar: R$ ", $totalpago = $litros*$etanol;
}else if($combs=="Diesel"){
     echo "Você abasteceu $litros litros<br>";
   echo " Total a pagar: R$ ", $totalpago = $litros*$diesel;
}
?>