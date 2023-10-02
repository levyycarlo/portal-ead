<?php

//include("../PadroesPHP/conn.php");
// include_once('../PadroesPHP/conexao.php');
$host = "localhost";
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
$curso = $_POST['curso'];
$stmt = $conn->prepare("select * from aluno");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


$idCursoAux;

$verCurso = $conn->prepare("select * from curso");
$verCurso->execute();
$results3 = $verCurso->fetchAll(PDO::FETCH_ASSOC);

foreach($results3 as $row){
    //echo $row['nome_curso'] . "-----" .$curso;
     if($row['nome_curso'] === $curso){
         
         $idCursoAux = $row['id_curso'];
        // echo $row['id_curso'];
     }
 
}



foreach ($results as $row) {
    if (($row['email'] === $email) && ($row['pass'] === $pass) && ($row['id_curso_FK'] == $idCursoAux)) {
        $expiration_time = time() + 300; // 300 segundos = 5 minutos
        setcookie("id_aluno", $row['id_aluno'], $expiration_time, "/");
       setcookie("id_curso", $row['id_curso_FK'], $expiration_time, "/");
       setcookie("login_status", "logged_in", $expiration_time, "/");

       if($row['id_curso_FK'] == 1){
        header("Location: ../../poslogin/startprog.php?id=" . $row['id_aluno'] . "&id_curso=" . $row['id_curso_FK']);
        
        exit;

       }elseif($row['id_curso_FK'] == 2){
        header("Location: ../../poslogin/startprog.php?id=" . $row['id_aluno'] . "&id_curso=" . $row['id_curso_FK']);
        
        exit;
       }elseif($row['id_curso_FK'] == 3){
        header("Location: ../../poslogin/startprog.php?id=" . $row['id_aluno'] . "&id_curso=" . $row['id_curso_FK']);
        
    

       }
        
        
    }
}

header("Location: loginB.php?login_success=true");
exit;

// Se nenhum usuário corresponder ao email e senha fornecidos
echo "Email ou senha incorretos";
?>

