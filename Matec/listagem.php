<?php

include("classes/bancoDados.php");

session_start();

$sql = "SELECT * FROM usuarios_cadastrados";
$result = $mysqli->query($sql);

$assinantes = array();

if ($result->num_rows > 0) {
    // Converter resultados em um array associativo
    while ($row = $result->fetch_assoc()) {
        $assinantes[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./tema/CSS/listagem.css">
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
    <br>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tableAssinantes" style="text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ativo</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($assinantes as $assinante) {
                        ?>
                            <tr>
                                <th scope="row"> <?= $assinante['id'] ?></th>
                                <td> <?= $assinante['usuario'] ?></td>
                                <td> <?= $assinante['nome'] ?></td>
                                <td> <?= $assinante['email'] ?></td>
                                <td> <?= $assinante['ativo'] == 1 ? "Ativo" : "Desativado"; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle rounded-pill" type="button" id="dropdownMenuActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ações
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuActions">
                                            <li>
                                                <a href="editar-user.php" class="dropdown-item">
                                                    <i class="fa-solid fa-user-pen"></i> EDITAR
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item" onclick="mudarStatus(<?= $assinante['id'] ?>, 0)">
                                                    <i class="fa-solid fa-x"></i> EXCLUIR
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#tableAssinantes').DataTable({

        });
    });

    function mudarStatus(id, ativo) {

        $.ajax({
            type: "POST",
            url: '/MATEC---Trabalho-de-Conclusao-de-Curso/matec/ajax/excluir_usuario.php',
            data: {
                "id": id,
                "ativo": ativo,
            },
            success: function(resposta) {
                location.reload();
            }
        });
    }
</script>