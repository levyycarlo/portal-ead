<?php 
include "../../PadroesPHP/conn.php";

$id = $_GET['id'];
$id_curso = $_GET['id_curso'];
$anotacao = $_POST['anotacao'];
$id_anotacao = $_GET['id_anotacao'];

$stmt = $conn->prepare("Update anotacoes set anotacao = :anotacao where id_anotacao = :id_anotacao");
$stmt->bindParam(':anotacao',$anotacao);
$stmt->bindParam(':id_anotacao',$id_anotacao);
$stmt->execute();

header("Location: listarAnotacao.php?id=".$id."&id_curso=".$id_curso);
        exit;



?>