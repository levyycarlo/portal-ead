<?php 
include "../PadroesPHP/conn.php";

$id = $_GET['id'];
$id_curso = $_GET['id_curso'];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="padrao.css">
    <title>Login de Aluno</title>
    <style>
        /* Personalização específica para esta página */
        body {
            background-color: #f5f5f5; /* Cor de fundo personalizada */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Centraliza verticalmente na tela */
        }

        .form {
            background-color: #fff; /* Cor de fundo do formulário */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra no formulário */
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #0091ea; /* Cor do título */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #0091ea; /* Cor de fundo do botão */
            color: #fff; /* Cor do texto do botão */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3; /* Cor de fundo do botão ao passar o mouse */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const loginSuccess = urlParams.get('login_success');

            if (loginSuccess === 'true') {
                alert('Email ou senha incorretos!');
            }
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Login de Aluno</h2>
            <form id="loginForm" action="ValidadeRelogin.php?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
    <script src="validacaoLogin.js"></script>
</body>
</html>
