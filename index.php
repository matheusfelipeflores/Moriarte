<!doctype html>
<html lang="pt-BR" style="cursor: var(--ff-mouse);">

<head>
    <!-- TAGS META NECESSÁRIAS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!---------- CSS ----------->
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel="stylesheet" type="text/css" href="css/lightslider.css" />
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 768px)" />
    
    <!--ICONES DO FONTAWESOME -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    <!---------- CSS ----------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- ICONES PARA NAVEGADOR -->
    <link rel="shortcut icon" href="images/logo.ico" />
    <link rel="shortcut icon" href="images/logodark.ico" />

    <!-- TITULO PARA NAVEGADOR -->
    <title>Moriarte</title>
</head>

<style>
    :root {
        --clr-light: #f3f1ef;
        --clr-dark: rgb(26, 26, 26);

        --clr-light2: #fff;
        --clr-dark2: rgb(51,51,51);

        --clr-darkshadow: rgba(200,200,200,.8);

        --foreground: var(--clr-dark);
        --background: var(--clr-light);
        --background2: var(--clr-light2);
        --background3: var(--clr-lightdark2);

        --box-shadow: var(--clr-darkshadow);

                /* LIGHT IMAGE*/

        --ff-imgdark: url(images/noise.png);
        --ff-logo: url(images/lightlogo.png);
        --ff-mouse: url(images/mouselight.png);
    }

    .darkmode {
        --clr-light: #f3f1ef;
        --clr-dark: rgb(26, 26, 26);

        --clr-light2: #fff;
        --clr-dark2: rgb(51, 51, 51);

        --clr-darkshadow: rgba(0,0,0,.8);

        --foreground: var(--clr-light);
        --background: var(--clr-dark);
        --background2: var(--clr-light2);
        --background3: var(--clr-lightdark2);

        --box-shadow: var(--clr-darkshadow);
                /* DARK IMAGE */

        --ff-imgdark: url(images/darkmodenoise.png);
        --ff-logo: url(images/darklogo.png);
        --ff-mouse: url(images/mousedark.png);
    }

    html {
        width: 100%;
        cursor: url("images/mousedark.png");
    }
    
    body {
        width: 100%;
        height: 100vh;
        background-color: var(--background);
        color: var(--foreground);
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        cursor: var(--ff-mouse);
    }

    @media (min-width: 768px){
    .container, .container-md, .container-sm {
        max-width: 100%!important;
    }
    
    #container {
        width: 100%;
        height: 100vh;
        c
        cursor: url("mouse.svg"),auto;
    }


    #center-logo-img {
        background-image: var(--ff-logo);
        width: 354px;
        height: 112px;
        background-repeat: no-repeat;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .empresa {
        width:100%;
        height: 100vh;
        z-index: 1;
    } 

    .empresa-redimension {
        width: 60%;
        height: 100%;
    }

    .sobrenos {
        position: relative;
        width: 90%;
        height: 50%;
        top: 35%;
        left: 8%;
    }

    .sobrenosh5 {
        width: 100%;
        height: 50%;
    }

    .sobrenosh5 h5 {
        color: #FFF;
    }

    .buttonsobrenos {
        width: 100%;
        height: 40%;

    }

    .buttonsobrenos-redimension {
        position: relative;
        width: 100%;
        height: 50%;
    }

    .nossos-produtos {
        width: 300px;
        height: 100%;
        background-color: #d75413;
        border: none;
        color: #FFF;
    }

    .sobrenos h5 {
        font-size: 1.2em;
        line-height: 35px;
    }
}

@media (min-width: 576px){
    .container, .container-sm {
        max-width: 100%!important;
    }
}

    #video-bg {
        position: absolute;
        top: 0; right: 0; bottom: 0; left: 0;
        overflow: hidden;
        z-index: -1;
    }

    #video-bg > video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    /* 1. No object-fit support: */
    @media (min-aspect-ratio: 16/9) {
        #video-bg > video { 
            height: 300%; 
            top: -100%; }
        }
    @media (max-aspect-ratio: 16/9) {
        #video-bg > video { 
            width: 300%; 
            left: -100%; }
        }
    /* 2. If supporting object-fit, overriding (1): */
    @supports (object-fit: cover) {
        #video-bg > video {
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
        }
    }

    #center-logo-img {
        background-image: var(--ff-logo);
        width: 354px;
        height: 112px;
        background-repeat: no-repeat;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .empresa {
        width:100%;
        height: 100vh;
        z-index: 1;
    } 

    .empresa-redimension {
        width: 60%;
        height: 100%;
    }

    .sobrenos {
        position: relative;
        width: 90%;
        height: 80%;
        top: 35%;
        left: 8%;
    }

    .sobrenosh5 {
        width: 100%;
        height: 50%;
    }

    .sobrenosh5 h5 {
        color: #FFF;
    }

    .buttonsobrenos {
        width: 100%;
        height: 30%;
    }

    .buttonsobrenos-redimension {
        position: relative;
        width: 100%;
        height: 50%;
    }

    .nossos-produtos {
        width: 300px;
        height: 100%;
        background-color: #d75413;
        border: none;
        color: #FFF;
    }

    .sobrenos h5 {
        font-size: 1.2em;
        line-height: 35px;
    }

    @media (max-width: 920px) {
        .empresa-redimension {
            width: 70%;
            height: 100%;
        }
        .sobrenos {
            position: relative;
            width: 100%;
            height: 60%;
            top: 35%;
            left: 8%;
        }
    }

</style>

<body>
    <!-- CABEÇALHO -->
    <section id="container">
        <header>
            <div class="container">
            <div id="center-logo-img"></div>
                <div class="menu-section">
                    <div class="menu-toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                    <nav>
                        <ul class="nav-links">
                            <li class="nav-item">
                                <a href="index.php" class=" btn effect01">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class=" btn effect01">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a href="#bannercarpapio" class=" btn effect01">Cardápio</a>
                            </li>
                        </ul>
                        <button id="dark-mode-toggle" class="dark-mode-toggle">
                            <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                                <path fill="currentColor"
                                    d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z"
                                    transform="translate(-8 -8)" />
                            </svg>
                        </button>
                    </nav>
                </div>
            </div>
        </header>
        <div class="empresa">
            <div class="empresa-redimension">
                <div class="sobrenos">
                    <div class="sobrenosh5">
                        <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </h5>
                    </div>
                    <div class="buttonsobrenos">
                        <div class="buttonsobrenos-redimension">
                            <button href="#" class="nossos-produtos">Conheça nosso cardápio</button>
                        </div>          
                    </div>
                </div>
            </div>
        </div>
        <div id="video-bg">
            <video autoplay muted loop="loop">

                <source type="video/webm" src="images/background.webm"
                        media="(orientation:landscape)">
            </video>
        </div>
    </section>

    <footer id="footer">

        <section id="form-cont">
            <div id="form-cont-center">
                <div id="form-title">
                    <div id="form-title-redimension">
                        <p>
                            Inscreva-se na Newsletter
                        </p>
                    </div>
                </div>
                <form action="reguser.php" method="post" class="form-group">
                    <div id="redimension-nome">
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Insira seu nome" class="form-control mt-2">
                    </div>
                    <div id="redimension-email">
                        <label>E-Mail</label>
                        <input type="email" name="email" placeholder="Insira seu e-mail" class="form-control mt-2">
                    </div>
                    <div id="redimension-button">
                        <input type="submit" name="submit" class="btn btn-info mt-2 btn-block">
                    </div>
            </div>
            </form>
        </section>
        <section id="rodapeopcoes">
            <div id="redimension-opcoesrodape">

                <div id="opcoesrodape" class="suporte">
                    <h1>Para o usuário</h1>
                    <ul>
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                        <li><a href="#">Onde estamos?</a></li>
                    </ul>
                </div>

                <div id="opcoesrodape" class="minhaconta">
                    <h1>Minha conta</h1>
                    <ul>
                        <li><a href="#">Formas de pagamento</a></li>
                    </ul>
                </div>

                <div id="opcoesrodape" class="explore">
                    <h1>Explore</h1>
                    <ul>
                        <li><a href="#">Nos avalie</a></li>
                        <li><a href="#">Seja um patrocinador</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="contato-desenvolvimento">
            <div id="contato-footer">
                <div class="connect-us-footer">
                    <p>Conecte-se conosco</p>
                </div>
                <div class="redimension-span-contato-footer">
                    <div class="span-contato-footer"></div>
                </div>
                <div class="social-medias">
                    <a href="#">Fb</a>
                    <a href="#">In</a>
                </div>
            </div>
            <div id="desenvolvedor-footer">
                <p id="desenvolvedor-footer-p">©2021 Matheus Felipe Flores.</p>
            </div>
        </section>
    </footer>


    

    <!-- SCRIPTS -->
    <script src="js/menu.js" type="text/javascript"></script>
    <script src="js/menuScroll.js" type="text/javascript"></script>
    <script src="js/darkmode.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
        <script>
              function typeWriter(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 50 * i);
    });
  }

  const titulo = document.getElementById('text-about-us-p');
  typeWriter(titulo);
        </script>
</body>

</html>