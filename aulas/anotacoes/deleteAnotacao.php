<?php
include "../../PadroesPHP/conn.php";
$id = $_GET['id'];
$id_anotacao = $_GET['id_anotacao'];
$id_curso = $_GET['id_curso'];

$stmt = $conn ->prepare("delete  from anotacoes where id_anotacao = :id_anotacao");

$stmt ->bindParam(':id_anotacao', $id_anotacao);

$stmt ->execute();

header("Location: listarAnotacao.php?id=".$id."&id_anotacao=".$id_anotacao."&id_curso=".$id_curso);
        exit;




?>