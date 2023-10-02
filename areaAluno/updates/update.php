<?php
include "../../PadroesPHP/conn.php";
$id = $_GET['id'];


$stmt = $conn ->prepare("select * from aluno where id_aluno = :id");

$stmt ->bindParam(':id', $id);

$stmt ->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar os dados</title>
    <link rel="stylesheet" href="styleUpdateInfo.css.css">
    <link rel="stylesheet" href="../padrao.css">
    <style>
        /* Personalização específica para esta página */
        body {
            background-color: #f5f5f5; /* Cor de fundo personalizada */
            font-family: 'Arial', sans-serif; /* Fonte personalizada */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #0091ea; /* Cor do título */
            margin: 20px 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff; /* Cor de fundo do formulário */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra no formulário */
            padding: 20px;
            border-radius: 10px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"][readonly] {
            background-color: #f5f5f5; /* Cor de fundo readonly */
        }

        input[type="submit"] {
            background-color: #0091ea; /* Cor de fundo do botão */
            color: #fff; /* Cor do texto do botão */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Cor de fundo do botão ao passar o mouse */
        }
    </style>
    
</head>
<body>
    <h1>Atualizar os dados</h1>
    <form action="updateInfoBanco.php" method="post">
    <input type="hidden" name="id_curso" value="<?= $user['id_curso_FK'] ?>">
    <div>
        <label for="id">ID do aluno:</label>
        <input type="text" name="id" value="<?= $user['id_aluno'] ?>" readonly>
    </div>
    <div>
        <label for="turma">ID da turma:</label>
        <input type="text" name="turma" value="<?= $user['id_turma_FK'] ?>" readonly>
    </div>
    <div>
        <label for="nome_usuario">Nome de usuário:</label>
        <input type="text" name="nome_usuario" value="<?= $user['nome_aluno'] ?>">
    </div>
    <div>
        <label for="email_usuario">Email:</label>
        <input type="email" name="email_usuario" value="<?= $user['email'] ?>">
    </div>
    <div>
        <label for="pass">Senha:</label>
        <input type="password" name="pass" placeholder="Senha">
    </div>
    <div>
        <input type="submit" value="Atualizar cadastro">
    </div>
</form>
</body>

</html>