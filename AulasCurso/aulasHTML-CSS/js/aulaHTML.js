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
            //Módulo 1:
            "modulo1:video1": "https://youtube.com/embed/Ejkb_YpuHWs?si=170jOhDpoYUuf9pK",
            "modulo1:video2": "https://youtube.com/embed/jgQjeqGRdgA?si=pjw5M5xH7LjUx0FmY",
            "modulo1:video3": "https://youtube.com/embed/57wyfS560Uk?si=r62mAvJWlAkOj89x",

           // Módulo 2:
           "modulo2:video1": "https://youtube.com/embed/0zLjVhHdOm8?si=m22UKdelPBZZQ6I-",
           "modulo2:video2": "https://youtube.com/embed/8rkuukKA8a4?si=f9jKu8UT7qIo9GfJ",
           "modulo2:video3": "https://youtube.com/embed/CwOmEetWMnU?si=MDoRQX4ajgm9BNfe",

           // Módulo 3:
            "modulo3:video1": "https://youtube.com/embed/1ZeettFfxys?si=g7ku4WPYc0AgRVyZ",
            "modulo3:video2": "https://youtube.com/embed/aiOEBhozEOg?si=xgJLHb5jv1Hhp30U",
            "modulo3:video3": "https://youtube.com/embed/HaSgt1hK2Fs?si=YpilEEjVnEMd0cMB",
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
