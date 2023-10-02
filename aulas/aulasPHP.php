<?php
include "../PadroesPHP/conn.php";



$id = $_GET['id'];
$id_curso = $_GET['id_curso'];

$valor_Beta = "";

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma SuCelso EAD</title>
    <link rel="stylesheet" href="../AulasCurso/aulasPHP/css/style.css"> <!-- Arquivo de estilos CSS -->
    
</head>
<body>
   

    <!-- Conteúdo Original -->
    <div class="hidden-content">
        <header>
            <nav>
                <ul>
                    <li><a href="../homepage/index.php?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>">Início</a></li>
                    <li><a href="anotacoes/listarAnotacao.php?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>">Anotações</a></li>
                    <li><a href="../areaAluno/indexPerfil.php?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>">Perfil</a></li>
                    <li><a href="javascript:void(0);" id="sairButton">Sair</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="container">
                <h1 class="page-title">SUCELSO: CURSO PHP</h1>
                <div class="curso-selection">
                    <h2>MATERIAL DE ESTUDO</h2>
                    <select id="cursoSelect">
                        <option value=""> Escolha um Módulo</option>
                        <option value="modulo1">Módulo 1</option>
                        <option value="modulo2">Módulo 2</option>
                        <option value="modulo3">Módulo 3</option>
                    </select>                
                </div>
                <div class="aulas">
                    <button id="expandirAulas" class="material-button" data-modulo="modulo1" style="display: none;">Aulas</button>
                    <div class="aulas-options">
                        <h2>Escolha uma Aula:</h2>
                        <div class="aulas-modulo" data-modulo="modulo1">
                            <button id="expandirAulasModulo1" class="material-button" data-modulo="modulo1" style="display: none;">Aulas</button>
                            <div class="aulas-list-modulo1">
                                <button class="material-button aula-button" data-video="modulo1:video1">Aula 1</button>
                                <button class="material-button aula-button" data-video="modulo1:video2">Aula 2</button>
                                <button class="material-button aula-button" data-video="modulo1:video3">Aula 3</button>
                            </div>
                        </div>
                        <div class="aulas-modulo hidden" data-modulo="modulo2">
                            <button id="expandirAulasModulo2" class="material-button" data-modulo="modulo2" style="display: none;">Aulas</button>
                            <div class="aulas-list-modulo2">
                                <button class="material-button aula-button" data-video="modulo2:video1">Aula 1</button>
                                <button class="material-button aula-button" data-video="modulo2:video2">Aula 2</button>
                                <button class="material-button aula-button" data-video="modulo2:video3">Aula 3</button>
                            </div>
                        </div>
                        <div class="aulas-modulo hidden" data-modulo="modulo3">
                            <button id="expandirAulasModulo3" class="material-button" data-modulo="modulo3" style="display: none;">Aulas</button>
                            <div class="aulas-list-modulo3">
                                <button class="material-button aula-button" data-video="modulo3:video1">Aula 1</button>
                                <button class="material-button aula-button" data-video="modulo3:video2">Aula 2</button>
                                <button class="material-button aula-button" data-video="modulo3:video3">Aula 3</button>
                            </div>
                        </div>
                    </div>
                    <div class="video-container">
                        <!-- O vídeo da aula ou curso será carregado aqui -->
                    </div>
                </div>
                <div class="anotacoes">
                    <h2>Anotações:</h2>
                    <form action="anotacoes/guardaAnotacao.php" method="POST" autocomplete="off">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="hidden" name="curso" value="<?php echo $id_curso; ?>">
                        <textarea type="text" id="anotacoesTextArea" name="anotacao" class="anotacoes-text" placeholder="Suas anotações..." autocomplete="off"> <?php $valor_Beta  ?></textarea>
                        <button type="submit">Salvar</button>
                    </form>
                </div>
            </section>
        </main>
        <footer class="page-footer">
            <p>&copy; 2023 Plataforma SuCelso EAD</p>
        </footer>
        <div class="loading-overlay">
            <div class="loading-spinner"></div>
        </div>
        <script>
            // Função para definir cookies
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Função para obter o valor de um cookie por nome
            function getCookie(name) {
                var nameEQ = name + "=";
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i];
                    while (cookie.charAt(0) == ' ') {
                        cookie = cookie.substring(1, cookie.length);
                    }
                    if (cookie.indexOf(nameEQ) == 0) {
                        return cookie.substring(nameEQ.length, cookie.length);
                    }
                }
                return null;
            }

            // Função para apagar os cookies
            function apagarCookies() {
                // Define uma data de expiração no passado para remover os cookies de login
                document.cookie = "id_aluno=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "id_curso=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                
                // Remove o cookie da tela de abertura
                setCookie("openingScreenShown", "", -1);

                // Mostra um alerta antes do redirecionamento
                if (confirm("Você realmente deseja sair?")) {
                    // Redireciona o usuário para a página de login (ou onde desejar)
                    window.location.href = "../homepage/index.php";
                }
            }

            // Adiciona um evento de clique ao botão "Sair"
            const sairButton = document.getElementById('sairButton');
            if (sairButton) {
                sairButton.addEventListener('click', apagarCookies);
            }

 


        </script>
        <script src="../AulasCurso/aulasPHP/js/aulaPHP.js"></script> <!-- Arquivo de script JavaScript -->
        <script>
            //limpartextarea
    // Selecione o formulário pelo seu ID
    var form = document.getElementById('seuFormularioID');

    // Adicione um ouvinte de evento para o evento de envio do formulário
    form.addEventListener('submit', function (event) {
        // Previna o envio real do formulário
        event.preventDefault();

        // Selecione o elemento de textarea pelo seu ID
        var textarea = document.getElementById('anotacoesTextArea');

        // Redefina o valor do textarea para o valor padrão (zero, neste caso)
        textarea.value = "";

        // Submeta o formulário programaticamente agora que o valor do textarea foi redefinido
        form.submit();
    });
</script>

    </div> <!-- Fim do div.hidden-content -->
</body>
<?php $valor_Beta = "" ?>
</html>
