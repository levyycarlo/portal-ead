// Script JavaScript
const welcomeText = document.querySelector(".welcome-text");
const text = "Seja bem vindo ao nosso portal 🏁👾";

let index = 0;

function showText() {
    if (index < text.length) {
        welcomeText.textContent += text.charAt(index);
        index++;
        setTimeout(showText, 100); // Intervalo de 100 milissegundos entre as letras
    }
}

showText();

// Redirecionar para outra página ao clicar no botão
const button = document.querySelector(".floating-button");

button.addEventListener("click", () => {
    // Altere "outra_pagina.html" para a URL da página desejada
    window.location.href = "outra_pagina.html";
});
