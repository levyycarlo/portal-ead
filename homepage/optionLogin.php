<?php
// Verifique se os cookies de ID do aluno e ID do curso existem
if (isset($_COOKIE["id_aluno"]) && isset($_COOKIE["id_curso"])) {
    $id_aluno = $_COOKIE["id_aluno"];
    $id_curso = $_COOKIE["id_curso"];

    // Redirecione o usuário para a página de aulas ou outra página apropriada
    if($id_curso == 1){
        header("Location: ../aulas/aulasPHP.php?id=" . $id_aluno . "&id_curso=" . $id_curso);      
        exit;
       }elseif($id_curso == 2){
        header("Location: ../aulas/aulaJAVA.php?id=" . $id_aluno . "&id_curso=" . $id_curso); 
        exit;
       }elseif($id_curso == 3){
        header("Location: ../aulas/aulaHTML.php?id=" . $id_aluno . "&id_curso=" . $id_curso); 
        exit;
       }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Opções</title>
    <link rel="stylesheet" href="css/optionLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="login-name">Login Sucelso</h1>
        <div class="options">
            <a href="../login/Usuario/loginB.php" class="option-button">
                <i class="fas fa-user-graduate fa-3x"></i>
                <span>Aluno</span>
            </a>
        </div>
    </div>
</body>
</html>
