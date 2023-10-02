<?php
include "../../PadroesPHP/conn.php";

$id = $_POST['id'];
$anotacao = $_POST['anotacao'];
$id_curso = $_POST['curso'];

$stmt = $conn->prepare("INSERT into anotacoes(id_aluno_FK,id_curso_FK,anotacao) values(:id,:curso,:anotacao)");

$stmt->bindParam(':id',$id);
$stmt->bindParam(':curso',$id_curso);
$stmt->bindParam(':anotacao',$anotacao);
$stmt->execute();

if($id_curso == 1){
        header("Location: ../../aulas/aulasPHP.php?id=" . $id . "&id_curso=" . $id_curso);
        
        exit;

       }elseif($id_curso == 2){
        header("Location: ../../aulas/aulaJAVA.php?id=" . $id . "&id_curso=" . $id_curso);
        exit;
       }elseif($id_curso == 3){
        header("Location: ../../aulas/aulaHTML.php?id=" . $id . "&id_curso=" . $id_curso);
        exit;

       }

?>