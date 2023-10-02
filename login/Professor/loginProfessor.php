<?php

//include("../PadroesPHP/conn.php");
// include_once('../PadroesPHP/conexao.php');
$host = "127.0.0.1:3312";
$db = "escola";
$user = "root";
$pass = "";
try {
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user, $pass);
} catch (PDOException $err) {
    echo " Deu um erro:".$err;
}

$email = $_POST['email_professor'];
$pass = $_POST['pass_professor'];
$stmt = $conn->prepare("select * from professor");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    if (($row['email'] === $email) && ($row['pass'] === $pass)) {
        header("Location: printprof.php?id=" . $row['id_professor']);
        exit;
    }
}

// Se nenhum usuário corresponder ao email e senha fornecidos
echo "Email ou senha incorretos";
?>

