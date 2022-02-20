    /* Scroll para mudar cor do background do botão */
    window.addEventListener('scroll', function () {
        let header = document.querySelector('.container');
        let windowPosition = window.scrollY > 0;
        header.classList.toggle('scrolling-active', windowPosition);
    });