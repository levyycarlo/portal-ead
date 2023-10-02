<?php
include "../../PadroesPHP/conn.php";

$id_aluno = $_GET['id'];
$id_curso = $_GET['id_curso'];
$contAnotacao = 0; // Inicialize a variável
$href;

$stmt = $conn->prepare("SELECT * FROM anotacoes WHERE id_curso_FK = :id_curso AND id_aluno_FK = :id_aluno");

$stmt->bindParam(':id_curso', $id_curso);
$stmt->bindParam(':id_aluno', $id_aluno);

$stmt->execute();
if($id_curso == 1){
    $href= "../aulasPHP.php?id=" . $id_aluno . "&id_curso=" . $id_curso;
   }elseif($id_curso == 2){
    $href= "../aulaJAVA.php?id=" . $id_aluno . "&id_curso=" . $id_curso;
   }elseif($id_curso == 3){
    $href= "../aulaHTML.php?id=" . $id_aluno . "&id_curso=" . $id_curso;
   }

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="padrao.css">
    <title>Lista de Anotações</title>
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

        table {
            border-collapse: collapse;
            width: 80%; /* Largura da tabela personalizada */
            margin: 20px auto; /* Centraliza a tabela horizontalmente */
            background-color: #fff; /* Cor de fundo da tabela */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra na tabela */
        }

        th, td {
            padding: 12px 15px; /* Espaçamento interno das células */
            text-align: left;
            border-bottom: 1px solid #ddd; /* Linha inferior das células */
        }

        th {
            background-color: #0091ea; /* Cor de fundo do cabeçalho */
            color: #fff; /* Cor do texto do cabeçalho */
        }

        a {
            text-decoration: none;
            color: #0091ea; /* Cor dos links */
        }

        a:hover {
            text-decoration: underline; /* Sublinha os links ao passar o mouse */
        }
    </style>
</head>
<body>
          <header>
            <nav>
                <ul>
                    <li><a href="<?php echo $href?>">Pagina aluno</a></li>
                </ul>
            </nav>
        </header>
    <table border="1">
        <tr>
            <th>Numero da anotação</th>
            <th>Anotação</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($results as $row): $contAnotacao++; ?>
        <tr>
            <td><?php echo $contAnotacao; ?></td>
            <td><?= $row['anotacao']; ?></td>
            <td>
                <a href="updateAnotacao.php?id=<?= $id_aluno ?>&id_curso=<?= $id_curso ?>&id_anotacao=<?= $row['id_anotacao'] ?>&anotacao=<?= $row['anotacao']; ?>">Editar</a> |
                <a href="deleteAnotacao.php?id=<?= $id_aluno ?>&id_anotacao=<?= $row['id_anotacao']; ?>&id_curso=<?= $id_curso ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
