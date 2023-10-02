document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("loginAdmForm");

    form.addEventListener("submit", function(event) {
        const email = form.querySelector('input[name="email"]');
        const senha = form.querySelector('input[name="senha"]');

        // Validação do campo de email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            alert("Por favor, insira um endereço de email válido.");
            email.focus();
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Validação dos campos em branco
        if (senha.value.trim() === "") {
            alert("Por favor, preencha todos os campos.");
            event.preventDefault(); // Impede o envio do formulário
        }
    });
});
