<?php
include "../PadroesPHP/conn.php";
$id = $_GET['id'];
$id_curso = $_GET['id_curso'];

$stmt = $conn ->prepare("select * from aluno where id_aluno = :id");

$stmt ->bindParam(':id', $id);

$stmt ->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

//<a href="/projetos/atual/trabalho1/areaAluno/updates/update.php?id=<?= $id "
if($id_curso == 1){
    $href= "../aulas/aulasPHP.php?id=" . $id . "&id_curso=" . $id_curso;
   }elseif($id_curso == 2){
    $href= "../aulas/aulaJAVA.php?id=" . $id . "&id_curso=" . $id_curso;
   }elseif($id_curso == 3){
    $href= "../aulas/aulaHTML.php?id=" . $id . "&id_curso=" . $id_curso;

   }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="padrao.css">
    <title>Document</title>
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
                    <li><a href="<?php echo $href?>"> Pagina aluno</a></li>
                </ul>
            </nav>
        </header>
    <table border="1">
        <tr>
            <th>Nome do usuario</th>
            <th>email do usuario</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($results as $row): ?>
              
        <tr>
            <td><?= $row['nome_aluno'];?></td>
            <td><?= $row['email'];?></td>
            <td><a href="VerificarUpdate.php?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>">Editar</a></td>
        </tr>
     <?php endforeach; ?>
    </table>
</body>
</html>

