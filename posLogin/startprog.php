<?php
include "../PadroesPHP/conn.php";



$id = $_GET['id'];
$id_curso = $_GET['id_curso'];
$href;

$valor_Beta = "";

if($id_curso == 1){
    $href= "../aulas/aulasPHP.php?id=$id&id_curso=$id_curso";

   }elseif($id_curso == 2){
    $href= "../aulas/aulaJAVA.php?id=$id&id_curso=$id_curso";
   }elseif($id_curso == 3){
    $href= "../aulas/aulaaHTML.php?id=$id&id_curso=$id_curso";

   }

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Página com Botão Gigante</title>
</head>
<body>
    <div class="container">
        <h1 class="welcome-text"></h1>
        <a href="<?php echo $href?>" class="floating-button">START NA PROGRAMAÇÃO</a>
    </div>
    <script>
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
    window.location.href = "<?php echo $href?>";
});



    </script>
</body>
</html>
