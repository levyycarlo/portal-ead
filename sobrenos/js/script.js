const header = document.querySelector("header");

        window.addEventListener("scroll", function () {
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        let menu = document.querySelector('.menu-nav'); // Altere o seletor para o menu
        let navlist = document.querySelector('.menu-nav ul'); // Altere o seletor para a lista de navegação

        menu.onclick = () => {
            navlist.classList.toggle('active');
        }

        const sr = ScrollReveal({
            distance: '50px',
            duration: 2500,
            reset: true
        });

        sr.reveal('.introducao', { delay: 350, origin: 'left' }); // Altere o seletor para a classe 'introducao'