document.addEventListener("DOMContentLoaded", function () {
    const expandirAulasButton = document.getElementById("expandirAulas");
    const aulasOptions = document.querySelector(".aulas-options");
    const videoContainer = document.querySelector(".video-container");
    const anotacoesTextArea = document.getElementById("anotacoesTextArea");
    const cursoSelect = document.getElementById("cursoSelect");
    let videoIframe = null; // Variável para rastrear o vídeo atualmente reproduzido

    // Expandir/contrair as opções de Aulas
    expandirAulasButton.addEventListener("click", function () {
        // Verifique se há um vídeo reproduzindo e remova-o, se houver
        if (videoIframe) {
            videoContainer.removeChild(videoIframe);
            videoIframe = null;
        }

        aulasOptions.classList.toggle("expanded");
    });

    // Função para mostrar os botões "Aulas" quando um módulo é selecionado
    function mostrarBotaoAulas() {
        const selectedCurso = cursoSelect.value;
        expandirAulasButton.style.display = selectedCurso ? "block" : "none";
    }

    // Manipulador de eventos para o evento 'change' do elemento #cursoSelect
    cursoSelect.addEventListener("change", function () {
        mostrarBotaoAulas(); // Mostra ou oculta o botão "Aulas" com base na seleção do módulo
        const selectedCurso = cursoSelect.value;
        if (selectedCurso) {
            mostrarBotoesAula(selectedCurso); // Mostra os botões de aula apropriados
        }
    });

    // Função para mostrar os botões de aula apropriados com base no módulo selecionado
    function mostrarBotoesAula(modulo) {
        // Ocultar todos os contêineres de botões de aula
        const todosModulos = document.querySelectorAll(".aulas-modulo");
        todosModulos.forEach((mod) => {
            mod.style.display = "none";
        });

        // Mostrar o contêiner de botões de aula do módulo selecionado
        const moduloSelecionado = document.querySelector(`.aulas-modulo[data-modulo="${modulo}"]`);
        if (moduloSelecionado) {
            moduloSelecionado.style.display = "block";
        }
    }

    // Carregar o vídeo da aula selecionada
    function loadVideo(aula) {
        // Mapear as opções de aulas para URLs de vídeo (substitua com seus URLs)
        const videoURLs = {
            // Módulo 1:
            "modulo1:video1": "https://youtube.com/embed/TfsO0BGvGn0?si=dRk2AT6WLDM4vSG9",
            "modulo1:video2": "https://youtube.com/embed/fvbOFIduMoI?si=__UpPwDrGgB90yGw",
            "modulo1:video3": "https://youtube.com/embed/dLHlHTsFqvk?si=Y9gdaqLAfMVJn_XO",

            // Módulo 2:
            "modulo2:video1": "https://youtube.com/embed/TwNmvk-F7E8?si=qRnwjnAe1T9g585k",
            "modulo2:video2": "https://youtube.com/embed/4kSJOJEi0aQ?si=Wukwov_DWsDBpoiL",
            "modulo2:video3": "https://youtube.com/embed/4kSJOJEi0aQ?si=Wukwov_DWsDBpoiL",

            // Módulo 3:
            "modulo3:video1": "https://youtube.com/embed/xaaTLxyJrLA?si=V4CgCu1CL8b-HV7Y",
            "modulo3:video2": "https://youtube.com/embed/TF8OSlQ9HAk?si=QneeCBWE1xN-V5Ro",
            "modulo3:video3": "https://youtube.com/embed/9jWACl9_k54?si=uJg4Mf6kRF63Onfv",
        };
        const videoURL = videoURLs[aula] || "";

        // Criar um novo elemento de vídeo
        const iframe = document.createElement("iframe");
        iframe.width = "560";
        iframe.height = "315";
        iframe.src = videoURL;
        iframe.frameBorder = "0";
        iframe.allowFullScreen = true;

        // Remover qualquer vídeo anterior e adicionar o novo vídeo
        if (videoIframe) {
            videoContainer.removeChild(videoIframe);
        }
        videoContainer.appendChild(iframe);
        videoIframe = iframe;
    }

    // Adicionar um evento de clique para cada opção de aula
    const aulaButtons = document.querySelectorAll(".aula-button");
    aulaButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const aula = button.getAttribute("data-video"); // Obtém o atributo data-video
            loadVideo(aula); // Carrega o vídeo da aula clicada
        });
    });

    // Salvar as anotações automaticamente enquanto o aluno digita
    anotacoesTextArea.addEventListener("input", function () {
        const anotacoes = anotacoesTextArea.value;
        localStorage.setItem("anotacoes", anotacoes);
    });

    // Carregar as anotações salvas quando a página for carregada
    const savedAnotacoes = localStorage.getItem("anotacoes");
    if (savedAnotacoes) {
        anotacoesTextArea.value = savedAnotacoes;
    }

    // Ocultar o botão "Aulas" inicialmente quando a página é carregada
    mostrarBotaoAulas();
});
