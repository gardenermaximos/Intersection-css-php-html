<?php

$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$sabores = $_POST['sabores'];
$bordas = $_POST['bordas'];
$cupom = $_POST['cupom'];

$qtd = count($sabores);

if($tamanho == 'Broto'){
    $total = 45;
}else{
    $total = 65;
}
if($refri == 'Coca'){
    $total = $total + 12;
}elseif($refri == 'Guarana'){
    $total = $total + 10;
}elseif($refri == 'Cachaça'){
    $total = $total + 15;
}elseif($refri == 'Skol'){
    $total = $total + 8;
}

if($bordas == 'Nenhuma'){
    $total = $total + 0;
}elseif($refri == 'Catupiry'){
    $total = $total + 5;
}elseif($refri == 'Cheddar'){
    $total = $total + 5;
}

if($cupom == 'PROMO10'){
    $total = $total -10;
}

$texto_sabores = implode(', ', $sabores);

$msg = 'Pedido: Pizza $tamanho ($texto_sabores) + Refri $refri. Total: R$ $total';
$numero = "5514995687043";
$link = 'https://api.whatsapp.com/send?phone='. $numero . '&text=' . urlencode($msg);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <img src="" alt="Logo da Pizzaria">
        <h1>🍕 Resumo do seu pedido</h1>
        <p>Pizza: <?php echo $tamanho; ?></p>
        <p>Sabores: <?php echo $texto_sabores; ?></p>
        <p>Refrigerante: <?php echo $refri; ?></p>
        <p>Total: <?php echo $total; ?></p>
        <a href='<?php echo $link; ?>' class='btn wsp'>
        <a>Pedir no whatsapp</a>
        <br><br>
        <a class='btn' href='index.html'>Voltar</a>
    </div>
</body>
</html>