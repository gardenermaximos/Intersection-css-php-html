<?php
// 1. Pega os dados do formulário
$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

// 2. Faz o cálculo do IMC (dividindo por 100 caso tenha digitado em centímetros, ex: 175)
if ($altura > 3) {
    $altura_calculo = $altura / 100; 
} else {
    $altura_calculo = $altura;
}

$imc = $peso / ($altura_calculo * $altura_calculo);

// 3. Verifica a classificação
if($imc < 18.5){
    $nivel = "Abaixo do peso";
} else if(24.9 >= $imc && $imc >= 18.5){
    $nivel = "Peso normal";
} else if(29.9 >= $imc && $imc >= 25){
    $nivel = "Sobrepeso";
} else {
    $nivel = "Obesidade";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - NutriVida</title>
   
    <link rel="stylesheet" href="3.css"> 
</head>
<body>
    <div class="meia" style="padding: 20px; text-align: left;">
        <h1 style="text-align: center;">Resultado do IMC</h1>
        
        <div style="color: white; font-size: 18px; line-height: 1.6;">
            <?php
        
            echo "<strong>Paciente:</strong> $nome<br>";
            echo "<strong>Peso:</strong> $peso kg<br>";
            echo "<strong>Altura:</strong> $altura_calculo m<br>";
            echo "<strong>IMC:</strong> " . number_format($imc, 2) . "<br>";
            echo "<strong>Classificação:</strong> $nivel<br><br>";
            echo "O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. Procure um profissional para uma avaliação individualizada.<br><br><hr><br>";
            echo "Quer cuidar melhor da sua saúde?<br>";
            echo "Agende uma consulta com nossa nutricionista!";
            ?>
        </div>
        
  
        <br>
        <div style="text-align: center;">
            <a href="javascript:history.back()" style="color: white; background-color: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 10px; text-decoration: none; font-weight: bold; display: inline-block;">Voltar</a>
        </div>
    </div>
</body>
</html>