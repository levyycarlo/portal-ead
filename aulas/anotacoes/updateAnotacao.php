<?php
include "../../PadroesPHP/conn.php";
$id = $_GET['id'];
$id_curso = $_GET['id_curso'];
$id_anotacao = $_GET['id_anotacao'];
$anotacao = $_GET['anotacao'];

$stmt = $conn ->prepare("select * from anotacoes where id_anotacao = :id_anotacao");

$stmt ->bindParam(':id_anotacao', $id_anotacao);

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
    <link rel="stylesheet" href="padrao.css">
    <style>
        /* Personalização específica para esta página */
        body {
            background-color: #f5f5f5; /* Cor de fundo personalizada */
        }

        header {
            background-color: #0091ea;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin: 0 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #0056b3;
        }

        h1 {
            font-size: 24px;
            margin-top: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            min-height: 150px;
        }

        button {
            background-color: #0091ea;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
    
</head>
<body>
    <h1 style="text-align: center;">Atualizar Anotação</h1>
    <form action="updateInformacaoBanco.php?id=<?= $user['id_aluno_FK'] ?>&id_curso=<?= $user['id_curso_FK'] ?>&id_anotacao=<?= $user['id_anotacao'] ?>" method="post">
        <div>
            <label for="text">Anotação:</label>
            <textarea name="anotacao" value="<?php echo $anotacao ?>" cols="30" rows="10"><?php echo $anotacao ?></textarea>
        </div>
        <div>
            <button type="submit" value="Atualizar cadastro">Atualizar cadastro</button>
            
        </div>
    </form>
</body>

</html>