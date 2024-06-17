<?php

session_start();

// $nomeUser = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./tema/CSS/main.css">
    <link rel="stylesheet" href="./tema/CSS/navBar.css">
    <title>Main</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">MATEC</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="bloco">
                <h2>Teste nosso Chatbot</h2>
                <a href="chatBot/chatbot.php" class="btn">Iniciar Teste</a>
            </div>
            <div class="bloco">
                <h2>Contatos de Plano</h2>
                <p>Entre em contato conosco para saber mais sobre nossos planos.</p>
                <a href="contatos.html" class="btn">Ver Contatos</a>
            </div>
            <div class="bloco">
                <h2>Listagem Clientes</h2>
                <a href="listagem.php" class="btn">Ver clientes</a>
            </div>
        </div>
    </main>
</body>

</html>