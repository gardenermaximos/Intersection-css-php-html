<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plat = $_POST["plataforma"];
    $gen  = $_POST["genero"];
    $tam  = $_POST["tamanho"];
    
    $jogo = "";
    $desc = "";

    //------------ Jogos de PC ------------
    if ($plat == "PC" && $gen == "Ação" && $tam == "Curtas") {
        $jogo = "Counter-Strike 2";
        $desc = "Jogo de tiro competitivo dinâmico, focado em tática e partidas rápidas por rodadas.";
    } 
    elseif ($plat == "PC" && $gen == "Ação" && $tam == "Longas") {
        $jogo = "Cyberpunk 2077";
        $desc = "Um RPG de ação num mundo aberto futurista em Night City, cheio de missões envolventes.";
    } 
    elseif ($plat == "PC" && $gen == "RPG" && $tam == "Curtas") {
        $jogo = "Hades";
        $desc = "Jogo roguelike de ação e RPG com combate rápido e tentativas infinitas de fuga do Submundo.";
    } 
    elseif ($plat == "PC" && $gen == "RPG" && $tam == "Longas") {
        $jogo = "The Witcher 3: Wild Hunt";
        $desc = "RPG épico focado em história e exploração em um mundo de fantasia repleto de monstros.";
    }
    elseif ($plat == "PC" && $gen == "Estratégia" && $tam == "Curtas") {
        $jogo = "Teamfight Tactics";
        $desc = "Jogo de estratégia autochess dinâmico onde você monta composições de campeões em partidas rápidas.";
    }
    elseif ($plat == "PC" && $gen == "Estratégia" && $tam == "Longas") {
        $jogo = "Age of Empires IV";
        $desc = "Estratégia em tempo real clássica focada em construir impérios e comandar exércitos históricos.";
    }

    //------------ Jogos de Console ------------
    elseif ($plat == "Console" && $gen == "Ação" && $tam == "Curtas") {
        $jogo = "Rocket League";
        $desc = "Futebol jogado com carros turbinados, em partidas elétricas de 5 minutos.";
    } 
    elseif ($plat == "Console" && $gen == "Ação" && $tam == "Longas") {
        $jogo = "God of War Ragnarök";
        $desc = "Aventura épica de Kratos e Atreus na mitologia nórdica com combate visceral e história marcante.";
    } 
    elseif ($plat == "Console" && $gen == "RPG" && $tam == "Curtas") {
        $jogo = "Monster Hunter Rise";
        $desc = "RPG focado em caçadas rápidas e dinâmicas contra criaturas colossais.";
    } 
    elseif ($plat == "Console" && $gen == "RPG" && $tam == "Longas") {
        $jogo = "Elden Ring";
        $desc = "Um dos maiores RPGs de ação de todos os tempos em um mundo sombrio repleto de desafios.";
    }
    elseif ($plat == "Console" && $gen == "Estratégia" && $tam == "Curtas") {
        $jogo = "Overcooked! All You Can Eat";
        $desc = "Estratégia e cooperação divertida em cozinhas caóticas contra o relógio.";
    }
    elseif ($plat == "Console" && $gen == "Estratégia" && $tam == "Longas") {
        $jogo = "Civilization VI";
        $desc = "Jogo de estratégia em turnos para construir uma civilização que resista ao teste do tempo.";
    }

    //------------ Jogos de Celular ------------
    elseif ($plat == "Celular" && $gen == "Ação" && $tam == "Curtas") {
        $jogo = "Free Fire";
        $desc = "Battle Royale mobile super leve e rápido, ideal para partidas curtas em qualquer lugar.";
    } 
    elseif ($plat == "Celular" && $gen == "Ação" && $tam == "Longas") {
        $jogo = "Genshin Impact";
        $desc = "RPG de ação em mundo aberto com gráficos de anime incríveis e vasta exploração.";
    } 
    elseif ($plat == "Celular" && $gen == "RPG" && $tam == "Curtas") {
        $jogo = "Soul Knight";
        $desc = "RPG dungeon crawler rápido e divertido para jogar em poucos minutos.";
    } 
    elseif ($plat == "Celular" && $gen == "RPG" && $tam == "Longas") {
        $jogo = "Honkai: Star Rail";
        $desc = "RPG espacial com combates em turno sofisticados e rica narrativa.";
    }
    elseif ($plat == "Celular" && $gen == "Estratégia" && $tam == "Curtas") {
        $jogo = "Clash Royale";
        $desc = "Batalhas de cartas em tempo real de 3 minutos no celular.";
    }
    else {
        $jogo = "Clash of Clans";
        $desc = "Estratégia clássica para construir sua vila, treinar tropas e guerrelhar com clãs.";
    }

} else {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameIA - Especialista em Jogos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="logologo.jpg" width="500" alt="GameIA Logo">
        <h2>Recomendação</h2>
        <strong>Jogo:</strong>
        <?php echo $jogo; ?>
        <br><br>
        <strong>Descrição:</strong>
        <?php echo $desc; ?>
    </div>
    <br><br>
</body>
</html>