<?php
include "../PadroesPHP/conn.php";
$id = $_GET['id'];
$id_curso = $_GET['id_curso'];



$email = $_POST['email'];
$pass = $_POST['senha'];

$stmt = $conn ->prepare("select * from aluno where id_aluno = :id");

$stmt ->bindParam(':id', $id);

$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    if (($row['email'] === $email) && ($row['pass'] === $pass) && ($row['id_curso_FK'] == $id_curso)) {
        header("Location: updates/update.php?id=".$row['id_aluno']);
        exit;

    }
}

header("Location: VerificarUpdate.php?login_success=true&id=$id&id_curso=$id_curso");
exit;


// Se nenhum usuário corresponder ao email e senha fornecidos

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="padrao.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


?>