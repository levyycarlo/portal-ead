document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.querySelector("#loginForm form");
    const cadastroForm = document.querySelector("#cadastroForm form");

    loginForm.addEventListener("submit", function(event) {
        // Coloque aqui a lógica de validação específica para o formulário de login
        // Por exemplo, verificar se os campos de login estão preenchidos corretamente
        if (!isValidLogin()) {
            event.preventDefault(); // Impede o envio do formulário se a validação falhar
        }
    });

    cadastroForm.addEventListener("submit", function(event) {
        // Coloque aqui a lógica de validação específica para o formulário de cadastro
        // Por exemplo, verificar se os campos de cadastro estão preenchidos corretamente
        if (!isValidCadastro()) {
            event.preventDefault(); // Impede o envio do formulário se a validação falhar
        }
    });

    function isValidLogin() {
        const username = document.querySelector('input[name="email"]').value.trim();
        const password = document.querySelector('input[name="senha"]').value;
    
        if (username === "") {
            alert("Por favor, preencha o campo de Nome de Usuário.");
            return false;
        }
    
        if (password === "") {
            alert("Por favor, preencha o campo de Senha.");
            return false;
        }
    
        // Você pode adicionar aqui lógica adicional, como verificar as credenciais no servidor.
    
        return true; // Se todas as verificações passarem, retorne true.
    }

    function isValidCadastro() {
        const nome = document.querySelector('input[name="nome"]').value.trim();
        const email = document.querySelector('input[name="email"]').value.trim();
        const senha = document.querySelector('input[name="senha"]').value;
        const curso = document.querySelector('select[name="curso"]').value;
    
        if (nome === "") {
            alert("Por favor, preencha o campo de Nome.");
            return false;
        }
    
        if (email === "") {
            alert("Por favor, preencha o campo de Email.");
            return false;
        }
    
        if (!isValidEmail(email)) {
            alert("Por favor, insira um Email válido.");
            return false;
        }
    
        if (senha.length < 8) {
            alert("A senha deve ter pelo menos 8 caracteres.");
            return false;
        }
    
        if (curso === "") {
            alert("Por favor, selecione um Curso.");
            return false;
        }
    
        // Você pode adicionar aqui lógica adicional, como verificar se o email já está cadastrado no servidor.
    
        return true; // Se todas as verificações passarem, retorne true.
    }
    function isValidEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return emailPattern.test(email);
    }
});
