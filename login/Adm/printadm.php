<?php
$host = "127.0.0.1:3312";
$db = "escola";
$user = "root";
$pass = "";
try {
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user, $pass);
} catch (PDOException $err) {
    echo " Deu um erro:".$err;
}
$id = $_GET['id'];

$stmt = $conn ->prepare("select * from adm where id_adm = :id");

$stmt ->bindParam('id', $id);

$stmt ->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

//echo "Deu tudo certo o id do prefessor é " . $id;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Codigo de segurança</th>
            <th>Nome do usuario</th>
            <th>email do usuario</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($results as $row): ?>

        <tr>
            <td><?= $row['id_adm'];?></td>
            <td><?= $row['nome_adm'];?></td>
            <td><?= $row['email_adm'];?></td>
        </tr>
     <?php endforeach; ?>
    </table>
</body>
</html>
