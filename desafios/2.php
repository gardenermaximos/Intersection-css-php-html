<?php

$nome = $_POST["nome"];
$horas = $_POST["horas"];
$tipo = $_POST["tipo"];

if($tipo =="Carro"){
    $total = 8*$horas;
    echo "Motorista: $nome <br>Tempo: $horas horas<br>Total: R$ $total";
 }else if($tipo =="Moto"){
    $total = 5*$horas;
    echo "Motorista: $nome <br>Tempo: $horas horas<br>Total: R$ $total";
 }else if($tipo =="Caminhonete"){
    $total = 12*$horas;
    echo "Motorista: $nome <br>Tempo: $horas horas<br>Total: R$ $total";
}else{echo "Tá errado";}?>