document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("cadastroForm");

    form.addEventListener("submit", function(event) {
        const nome = form.querySelector('input[name="nome"]');
        const email = form.querySelector('input[name="email"]');
        const senha = form.querySelector('input[name="senha"]');
        const curso = form.querySelector('select[name="curso"]');

        // Validação do campo de email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            alert("Por favor, insira um endereço de email válido.");
            email.focus();
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Validação dos campos em branco
        if (nome.value.trim() === "" || senha.value.trim() === "" || curso.value === "") {
            alert("Por favor, preencha todos os campos.");
            event.preventDefault(); // Impede o envio do formulário
        }
    });
});
