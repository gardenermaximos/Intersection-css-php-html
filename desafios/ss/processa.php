<?php 
if ($_SERVER ["REQUEST_METHOD" ]== "POSRT"){
    $tipo= $_POST["tipo"];
    $gen= $_POST["genero"];
    $tam= $_POST["tamanho"];
    $obra= "";
    $desc= "";

    //------------Animes------------
if($tipo== "Anime" && $gen== "Ação" && $tam== "Longa"){
    $obra= "One Piece";
    $desc= "One Piece é um anime de ação e aventura que segue as aventuras de Monkey D. Luffy e sua tripulação em busca do tesouro lendário conhecido como One Piece.";
}   
elseif ($tipo== "Anime" && $gen== "Ação" && $tam== "Longa"){
    $obra= "Naruto";
    $desc= "Naruto é um anime de ação e aventura que segue a história de Naruto Uzumaki, um jovem ninja que busca reconhecimento e sonha em se tornar o Hokage, o líder de sua vila.";
}
elseif ($tipo== "Anime" && $gen== "Romance" && $tam== "Curta"){
    $obra= "Your Name";
    $desc= "Your Name é um filme de anime que combina romance, drama e elementos sobrenaturais, contando a história de dois jovens que misteriosamente trocam de corpo e tentam se encontrar.";
}        
elseif($tipo== "Anime" && $gen== "Romance" && $tam== "Médio"){
    $obra= "Toradora!";
    $desc= "Toradora! é um anime de romance e comédia que segue a história de Ryuuji Takasu e Taiga Aisaka, dois estudantes do ensino médio que formam uma amizade improvável enquanto tentam ajudar um ao outro a conquistar seus interesses amorosos.";
}
elseif($tipo== "Anime" && $gen== "Fantasia" && $tam== "Longa"){
    $obra= "Nanatsu no Taizai";
    $desc= "Nanatsu no Taizai é um anime de fantasia e aventura que segue a história dos Sete Pecados Capitais, um grupo de cavaleiros lendários que lutam para proteger o reino de Liones de ameaças malignas.";
}
elseif($tipo== "Anime" && $gen== "Fantasia" && $tam== "Médio"){
    $obra= "Sword Art Online";
    $desc= "Sword Art Online é um anime de fantasia e ficção científica que se passa em um futuro próximo, onde jogadores ficam presos em um jogo de realidade virtual e devem lutar para sobreviver e escapar.";
}

   //------------Mangás------------
if($tipo== "Mangá" && $gen== "Ação" && $tam== "Longa"){
    $obra= "Attack on Titan";
    $desc= "Attack on Titan é um mangá de ação e fantasia que se passa em um mundo onde a humanidade luta pela sobrevivência contra gigantes devoradores de humanos conhecidos como Titãs.";
}
elseif($tipo== "Mangá" && $gen== "Ação" && $tam== "Médio"){
    $obra= "My Hero Academia";
    $desc= "My Hero Academia é um mangá de ação e super-heróis que segue a história de Izuku Midoriya, um jovem sem poderes em um mundo onde a maioria das pessoas possui habilidades especiais, enquanto ele luta para se tornar um herói.";
}
elseif($tipo== "Mangá" && $gen== "Romance" && $tam== "Curta"){
    $obra= "Fruits Basket";
    $desc= "Fruits Basket é um mangá de romance e comédia que segue a história de Tohru Honda, uma jovem que se envolve com a família Sohma, que possui uma maldição que os transforma em animais do zodíaco chinês.";
}
elseif($tipo== "Mangá" && $gen== "Romance" && $tam== "Médio"){
    $obra= "Ao Haru Ride";
    $desc= "Ao Haru Ride é um mangá de romance e drama que segue a história de Futaba Yoshioka, uma estudante do ensino médio que tenta reconectar-se com seu primeiro amor enquanto lida com as mudanças em sua vida e relacionamentos.";
}
elseif($tipo== "Mangá" && $gen== "Fantasia" && $tam== "Longa"){
    $obra= "Fullmetal Alchemist";
    $desc= "Fullmetal Alchemist é um mangá de fantasia e aventura que segue a história dos irmãos Edward e Alphonse Elric, que usam alquimia em sua busca para restaurar seus corpos após uma tentativa fracassada de trazer sua mãe de volta à vida.";
}
elseif($tipo== "Mangá" && $gen== "Fantasia" && $tam== "Médio"){
    $obra= "The Ancient Magus' Bride";
    $desc= "The Ancient Magus' Bride é um mangá de fantasia e romance que segue a história de Chise Hatori, uma jovem que é comprada por um mago misterioso e embarca em uma jornada de autodescoberta e magia.";
}



   //------------Mangás------------
if($tipo== "Livro" && $gen== "Ação" && $tam== "Longa"){
    $obra= "O Senhor dos Anéis";
    $desc= "O Senhor dos Anéis é uma série de livros de fantasia épica escrita por J.R.R. Tolkien, que segue a jornada de Frodo Bolseiro e seus amigos para destruir o Um Anel e salvar a Terra-média das forças do mal.";
}
    elseif($tipo== "Livro" && $gen== "Ação" && $tam== "Médio"){
    $obra= "Percy Jackson e os Olimpianos";
    $desc= "Percy Jackson e os Olimpianos é uma série de livros de fantasia e aventura escrita por Rick Riordan, que segue as aventuras de Percy Jackson, um jovem semideus, enquanto ele descobre sua herança divina e enfrenta desafios mitológicos.";
}
    elseif($tipo== "Livro" && $gen== "Romance" && $tam== "Curta"){
    $obra= "O Morro dos Ventos Uivantes";
    $desc= "O Morro dos Ventos Uivantes é um romance clássico escrito por Emily Brontë, que explora temas de amor, vingança e obsessão através da história de Heathcliff e Catherine Earnshaw.";
}
    elseif($tipo== "Livro" && $gen== "Romance" && $tam== "Médio"){
    $obra= "Orgulho e Preconceito";
    $desc= "Orgulho e Preconceito é um romance escrito por Jane Austen, que narra a história de Elizabeth Bennet e sua relação com o orgulhoso Sr. Darcy, explorando temas de amor, classe social e preconceito.";
}
    elseif($tipo== "Livro" && $gen== "Fantasia" && $tam== "Longa"){
    $obra= "Harry Potter";
    $desc= "Harry Potter é uma série de livros de fantasia escrita por J.K. Rowling, que segue a vida do jovem bruxo Harry Potter e suas aventuras na Escola de Magia e Bruxaria de Hogwarts, enquanto enfrenta o vilão Lord Voldemort.";
}
    elseif($tipo== "Livro" && $gen== "Fantasia" && $tam== "Médio"){
    $obra= "As Crônicas de Nárnia";
    $desc= "As Crônicas de Nárnia é uma série de livros de fantasia escrita por C.S. Lewis, que narra as aventuras de crianças que descobrem o mundo mágico de Nárnia e enfrentam batalhas épicas contra forças do mal.";
}


}else{
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekIA - Especialista Nerd</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="logologo.jpg" width="500" alt="GeekIA Logo">
        <h2>Recomendação</h2>
        <strong>Obra:</strong>
        <?php echo $obra; ?>
        <br><br>
        <strong>Descrição:</strong>
        <?php echo $desc; ?>
        </div>
        <br><br>

</body></html>