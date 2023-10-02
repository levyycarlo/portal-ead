<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Login de Aluno</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const loginSuccess = urlParams.get('login_success');

            if (loginSuccess === 'true') {
                alert('Informações de login incorretas!');
            }
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Login de Aluno</h2>
            <form id="loginForm" action="login.php" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <select name="curso" id="curso" required>
                    <option value="" disabled selected>Selecione um curso</option>
                    <option value="PHP">PHP</option>
                    <option value="JAVA">JAVA</option>
                    <option value="HTML/CSS">HTML/CSS</option>
                </select>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
    <script src="validacaoLogin.js"></script>
</body>
</html>
