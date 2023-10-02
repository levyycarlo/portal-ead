document.addEventListener("DOMContentLoaded", function() {
    // Verifica se a notificação de sucesso está presente e mostra-a
    if (document.getElementById('loginSucesso')) {
        mostrarNotificacao("Login bem-sucedido.", "success");
    }

    // Verifica se a notificação de erro está presente e mostra-a
    if (document.getElementById('loginErro')) {
        mostrarNotificacao("Credenciais inválidas.", "error");
    }

    function mostrarNotificacao(mensagem, tipo) {
        var notificacoesDiv = document.getElementById("notificacoes");
        var notificacao = document.createElement("div");
        notificacao.className = "notificacao " + tipo;
        notificacao.textContent = mensagem;
        notificacoesDiv.appendChild(notificacao);
    }
});
