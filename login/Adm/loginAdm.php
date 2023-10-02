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

$email = $_POST['email'];
$pass = $_POST['senha'];
$stmt = $conn->prepare("select * from adm");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    if (($row['email_adm'] === $email) && ($row['pass'] === $pass)) {
        header("Location: printadm.php?id=" . $row['id_adm']);
        exit;
    }
}

echo "Email ou senha incorretos";


//header("Location: ..\Professor\printprof.php?id=" . $row['id_adm']);
?>

