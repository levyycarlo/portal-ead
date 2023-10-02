<?php 
include "../../PadroesPHP/conn.php";

$id = $_POST['id'];
$id_curso= $_POST['id_curso'];
$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$pass = $_POST['pass'];

$stmt = $conn->prepare("UPDATE aluno set nome_aluno = :nome_usuario, email = :email_usuario, pass = :pass where id_aluno = :id");
$stmt->bindParam(':nome_usuario',$nome_usuario);
$stmt->bindParam(':email_usuario',$email_usuario);
$stmt->bindParam(':pass',$pass);
$stmt->bindParam(':id',$id);
$stmt->execute();

header("Location: ../indexPerfil.php?id=" . $id . "&id_curso=" . $id_curso);
        exit;



?>