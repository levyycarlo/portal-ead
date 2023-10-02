
<?php 

if(isset($_GET['id']) && isset($_GET['id_curso'])){
    
    
    $id = $_GET['id'];
    $id_curso = $_GET['id_curso'];
    $href="cadastro.php?id=$id&id_curso=$id_curso";

    
    }else{
        $href="cadastro.php";
    }
    
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css">
    
    <title>Cadastro de Aluno</title>
    
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Cadastro de Aluno</h2>
            <form id ="cadastroForm"action="<?php echo $href?>" method="POST">
                <input type="text" name="nome_usuario" placeholder="Nome" required>
                <input type="email" name="email_usuario" placeholder="Email" required>
                <input type="password" name="pass" placeholder="Senha" required>
                <label for="curso">Curso:</label>
                <select name="curso" id="curso" required>
                    <option value="" disabled selected>Selecione um curso</option>
                    <option value="PHP">PHP</option>
                    <option value="JAVA">JAVA</option>
                    <option value="HTML/CSS">HTML/CSS</option>
                </select>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    <script src="validacaoCadastro.js"></script>
</body>
</html> 