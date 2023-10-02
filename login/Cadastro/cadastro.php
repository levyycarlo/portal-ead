<?php
$host = "localhost";
$db = "escola";
$user = "root";
$pass = "";
try {
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user, $pass);
} catch (PDOException $err) {
    echo " Deu um erro:".$err;
}
//variaveis de redirecionamento


if(isset($_GET['id']) && isset($_GET['id_curso'])){
    
    
    $id_redirecionamento = $_GET['id'];
    $id_curso_redirecionamento = $_GET['id_curso'];
    $href="../../homepage/index.php?login_success=true&mostrar_mensagem=true&id=$id&id_curso=$id_curso";

    
    }else{
        $href="../../homepage/index.php?login_success=true&mostrar_mensagem=true";
    }
 ;


//variaveis auxiliares

$armazenarTurmaPorCurso ;
$idCursoAux = 0;
$idTurmaAux = -10;
$idContTurma = 0;
$idCursoAtual = 0;
$TestarAdicao = -10; // ver se adiconou alguma turma
$quantidadePAtual = 0 ; //////////////
$idCursoAuxADD = 0;
$idTurmaAuxADD = 0; // varialve responsavael por saber qual turma esta lotada




//fim daas variaveis auxiliares

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$pass = $_POST['pass'];
$curso = $_POST['curso'];

// verificação curso
$verCurso = $conn->prepare("select * from curso");
$verCurso->execute();
$results3 = $verCurso->fetchAll(PDO::FETCH_ASSOC);

$verPessoas = $conn->prepare("select * from aluno");
$verPessoas->execute();
$resultss = $verPessoas->fetchAll(PDO::FETCH_ASSOC);



foreach($results3 as $row){
    //echo $row['nome_curso'] . "-----" .$curso;
     if($row['nome_curso'] === $curso){
         
         $idCursoAux = $row['id_curso'];
        // echo $row['id_curso'];
     }
 
}

foreach($resultss as $peaples){
    if(($peaples['email'] == $email_usuario) && ($peaples['id_curso_FK'] == $idCursoAux)){
     // Exibir um alerta JavaScript
     echo '<script>alert("Usuário já cadastrado.");</script>';
     // Redirecionar após o alerta
     echo '<script>window.location.href = "cadastro.html";</script>';
     return;
    }
}

//fim verificaçao

 
$verQuatidade = $conn->prepare("select * from turma ");
$verQuatidade->execute();
$resultsC = $verQuatidade->fetchAll(PDO::FETCH_ASSOC);

$verIdTurma = $conn->prepare("SELECT DISTINCT id_turma FROM turma where id_curso_FK = :idCursoAux ");
    $verIdTurma->bindParam(':idCursoAux',$idCursoAux);
    $verIdTurma->execute();
    $resultsT = $verIdTurma->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($resultsT as $rey) {
        $armazenarTurmaPorCurso = $rey['id_turma'];
        //echo "passou foreach turma". $rey['id_turma']."<br>";
     foreach($resultsC as $row){
        //echo "passou turma :". $row['id_turma'] . "e  curso: " . $row['id_curso_FK']."<br>";
        //echo "------------------------------";
        //echo "------------------------------";
       // echo "id curso da passando: " . $row['id_curso_FK'] ."id curso da pagina: " . $idCursoAux ."<br>";
        if($row['id_curso_FK'] == $idCursoAux){
            if(($row['id_turma'] === $rey['id_turma']) && ($row['quantidadeP'] < 10) ){
                $idTurmaAux = $row['id_turma']; //recebe o id da turma do forach atual para cadastrar
                $quantidadePAtual = $row['quantidadeP'] + 1; // define a variavel para cadatrar um numero a mais na quantidade do curso do foreach
                $idCursoAtual = $row['id_curso_FK']; // id do curso o qual passa no foreach atual
                addCadastrar($conn,$nome_usuario,$email_usuario,$pass,$idCursoAux,$idTurmaAux);
                addQuantidade($conn,$quantidadePAtual,$idTurmaAux,$idCursoAtual);
                
              //  echo "verificacao 1";
                $TestarAdicao = 0;
              // echo "passou aqui";

                
            }     
        }    
     }   //$idTurmaMax = $row['id_turma'];
    }

if($TestarAdicao == -10){
    $idTurmaAuxADD = $armazenarTurmaPorCurso + 1;
    $idCursoAuxADD = $idCursoAux;
    $quantidadePAtual = 1;
    
    addTurma($conn,$idTurmaAuxADD,$idCursoAuxADD);
    addCadastrar($conn,$nome_usuario,$email_usuario,$pass,$idCursoAuxADD,$idTurmaAuxADD);
    addQuantidade($conn,$quantidadePAtual,$idTurmaAuxADD,$idCursoAuxADD);
    //echo "exesdl";
}


function addQuantidade($conn,$quantidadePAtual,$idTurmaAux,$idCursoAtual) {
    $addQuantidade = $conn->prepare("update turma set quantidadeP = :quantidadePAtual where id_turma = :idTurmaAux and id_curso_FK = :id_curso_FK"); 
    $addQuantidade->bindParam(':quantidadePAtual',$quantidadePAtual);
    $addQuantidade->bindParam(':idTurmaAux',$idTurmaAux);
    $addQuantidade->bindParam(':id_curso_FK',$idCursoAtual);

    $addQuantidade->execute();
    
}

function addTurma($conn,$idTurmaAuxADD,$idCursoAuxADD){
    $addTurma = $conn->prepare("insert into turma(id_turma,id_curso_FK,quantidadeP) values (:idTurmaAuxADD,:idCursoAuxADD,0)");
    $addTurma->bindParam(':idTurmaAuxADD',$idTurmaAuxADD);
    $addTurma->bindParam(':idCursoAuxADD',$idCursoAuxADD);
    $addTurma->execute();
}

function addCadastrar($conn,$nome_usuario,$email_usuario,$pass,$idCursoAux,$idTurmaAux){
    $stmt = $conn->prepare("insert into aluno(nome_aluno,email,pass,id_curso_FK,id_turma_FK) values (:nome_alunos,:email,:pass,:id_curso_FK,:id_turma_FK)");

    $stmt->bindParam(':nome_alunos',$nome_usuario);
    $stmt->bindParam(':email',$email_usuario);
    $stmt->bindParam(':pass',$pass);
    $stmt->bindParam(':id_curso_FK',$idCursoAux);
    $stmt->bindParam(':id_turma_FK',$idTurmaAux);
    
    $stmt->execute();
       
}

//atribuir id turma




//fim atrivbuição


//$qtdT = $conn->prepare("select quantidadeP from turma where id_curso_fk = :idCursoAux");

// ...
header("Location: $href");

exit;

?>