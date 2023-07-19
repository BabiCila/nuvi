<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuvi Studio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="icon" type="image/png" href="./assets/img/icon_01.png"/>
  <meta property="og:title" content="Nuvi Studio" />
  <meta property="og:description" content="A creative studio focused on motion and design." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="./assets/img/share.png">
  <meta property="og:url" content="https://www.nuvi.studio" /> 
</head>

<body>
  <header class="header__box-new">
    <nav class="container-new">
      <div class="logos">
        <a href="#"><img src="./assets/img/logo.svg" class="logo-new" alt="Logo Nuvi"></a>
        <img src="./assets/img/motion_design.svg" class="motion-logo" alt="Logo motion and design">
      </div>
      <div class="buttons">
        <a class="btn" href="./index.php" alt="Link para página em inglês">EN</a>
        <ul class="menu__list-desktop">
          <li class="menu__item">
            <a class="menu__link" href="#">Home</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#pre-portfolio">Portfólio</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#pre-about">Quem somos</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#contact">Contato</a>
          </li>
        </ul>
        <input type="checkbox" id="menu" class="menu__check">
        <label for="menu">
          <img src="./assets/img/icon_menu.svg" class="menu__icon-new" alt="botão de menu">
        </label>
        <ul class="menu__list">
          <li class="menu__item" onclick="closeMenu()">
            <a class="menu__link" href="#">Home</a>
          </li>
          <li class="menu__item" onclick="closeMenu()">
            <a class="menu__link" href="#pre-portfolio">Portfólio</a>
          </li>
          <li class="menu__item" onclick="closeMenu()">
            <a class="menu__link" href="#pre-about">Quem somos</a>
          </li>
          <li class="menu__item" onclick="closeMenu()">
            <a class="menu__link" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main id="main" onclick="closeMenu()">
    <section class="videos" id="home">
      <div class="d-flex justify-content-center">
        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
      <div class="main-video">

        <video id="video1" class="main-video__video" autoplay loop="loop" muted playsinline>
          <source id="video_src" src="./assets/video/nuvi_studio_main_video_no_audio_03.mp4" type="video/mp4">
        </video>

      </div>
      <div id="pre-portfolio"></div>
    </section>
    <section class="portfolio">
      <h2 class="portfolio__title">Portfólio</h2>
      <h3 class="portfolio__text">Que tipo de projeto você está procurando?</h3>
      <div class="portfolio__projects">

        <div class="logo-animation">
          <img class="portfolio__subtitle" src="./assets/img/logo_animation_2.svg" alt="Logo animation">
          <div style="padding:56.25% 0 0 0;position:relative;"><iframe
              src="https://player.vimeo.com/video/811095276?h=6dadf1c48d&title=0&byline=0&portrait=0"
              style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
          <script src="https://player.vimeo.com/api/player.js"></script>
        </div>

        <div class="intro-outro">
          <img class="portfolio__subtitle" src="./assets/img/intro_e_outro_2.svg" alt="Intro and outro">
          <div style="padding:56.25% 0 0 0;position:relative;"><iframe
              src="https://player.vimeo.com/video/811096628?h=2696b5d77f&title=0&byline=0&portrait=0"
              style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
          <script src="https://player.vimeo.com/api/player.js"></script>
        </div>

        <div class="logo-design">
          <img class="portfolio__subtitle" src="./assets/img/logo_design_2.svg" alt="Logo design">
          <div id="carouselLogoDesign" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="6"
                aria-label="Slide 7"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="7"
                aria-label="Slide 8"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="8"
                aria-label="Slide 9"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="9"
                aria-label="Slide 10"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="10"
                aria-label="Slide 11"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="11"
                aria-label="Slide 12"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="12"
                aria-label="Slide 13"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="13"
                aria-label="Slide 14"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="14"
                aria-label="Slide 15"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="15"
                aria-label="Slide 16"></button>
              <button type="button" data-bs-target="#carouselLogoDesign" data-bs-slide-to="16"
                aria-label="Slide 17"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_01.jpg" class="d-block w-100"
                  alt="logo design e-lens">
              </div>
              <div class="carousel-item active">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_02.jpg" class="d-block w-100"
                  alt="logo design use pets">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_03.jpg" class="d-block w-100"
                  alt="logo design lisoca">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_04.jpg" class="d-block w-100"
                  alt="logo design versa">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_05.jpg" class="d-block w-100"
                  alt="logo design zagallo">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_06.jpg" class="d-block w-100"
                  alt="logo design cries">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_07.jpg" class="d-block w-100"
                  alt="logo design millyard">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_08.jpg" class="d-block w-100"
                  alt="logo design pilgrims">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_09.jpg" class="d-block w-100"
                  alt="logo design corgi">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_10.jpg" class="d-block w-100"
                  alt="logo design cosmo cart">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_11.jpg" class="d-block w-100"
                  alt="logo design newtier">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_12.jpg" class="d-block w-100"
                  alt="logo design codelabb">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_13.jpg" class="d-block w-100"
                  alt="logo design devs">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_14.jpg" class="d-block w-100"
                  alt="logo design klc">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_15.jpg" class="d-block w-100"
                  alt="logo design dishout">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_16.jpg" class="d-block w-100"
                  alt="logo design expedicao">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/portfolio/logo_design/site-nuvi-logo-design-02_17.jpg" class="d-block w-100"
                  alt="logo design flame">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLogoDesign"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselLogoDesign"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="custom-animation">
          <img class="portfolio__subtitle" src="./assets/img/custom_animation_2.svg" alt="Custom animations">
          <div style="padding:56.25% 0 0 0;position:relative;"><iframe
              src="https://player.vimeo.com/video/811097169?h=b627c59a97&title=0&byline=0&portrait=0"
              style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
          <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
      </div>

      <div id="pre-about"></div>

    </section>

    <section class="about">
      <div>
        <h2 class="about__title">Nuvi Studio</h2>
        <p class="about__text">Nos tornamos Nuvi em 2021 com o objetivo de atender clientes de todo o mundo, buscando entregar o máximo de qualidade e personalidade em cada um dos serviços prestados. </p>
        <p class="about__text">Nossa maior alegria ao realizar cada uma de nossas entregas, desde quando criamos um logo para um negócio que está surgindo até quando trazemos uma marca à vida através de uma animação única, é perceber que uma empresa estará se comunicando de forma mais impactante a ponto de se destacar em seu mercado e elevar os resultados de seu negócio.</p>
        <p class="about__text">Acreditamos que um processo de trabalho bem definido é o caminho ideal para entregas finais de qualidade e que correspondam as expectativas de cada um de nossos clientes, por isso, traçamos diretamente com cada contato nosso o passo a passo antes de iniciarmos qualquer um de nossos projetos.</p>
        <p class="about__text">Agora, que você já sabe um pouquinho mais sobre a gente e conhece nosso portfólio, entre em contato para discutirmos sobre qual o pacote ideal para o serviço que você está precisando. Ficaremos muito felizes em atendê-lo!</p>
      </div>
      <div class="about__founder">
        <div class="founder">
          <img src="./assets/img/foto_nubia.png" alt="Foto da fundadora" class="founder__img">
          <h2 class="founder__title">Nubia Sardou</h2>
          <p class="founder__subtitle">Designer Gráfico, Motion Designer e Fundadora</p>
        </div>
        <div class="founder">
          <img src="./assets/img/foto_vitor.png" alt="Foto do fundador" class="founder__img">
          <h2 class="founder__title">Vitor Farias</h2>
          <p class="founder__subtitle">Designer Gráfico, Motion Designer e Fundador</p>
        </div>
        <div id="contact"></div>
      </div>
    </section>
  </main>

  <footer class="final" onclick="closeMenu()"> 
    <div class="contact">
      <h2 class="contact__title">Vamos conversar?</h2>
      <form class="contact__form" action="./contact.php" method="post" id="contact_form">
        <div>
          <fieldset class="contact__fieldset" for="name">Nome</fieldset>
          <input class="contact__input" type="text" id="name" name="from_name" />
          <small id="textName" class="text_msg"></small>
        </div>
        <div>
          <fieldset class="contact__fieldset" for="mail">Email</fieldset>
          <input class="contact__input" type="email" id="email" name="from_email"/>
          <small id="textEmail" class="text_msg"></small>
        </div>
        <div>
          <fieldset class="contact__fieldset" for="msg">Mensagem</fieldset>
          <textarea class="contact__text" id="msg" name="message"></textarea>
          <small id="textMessage" class="text_msg"></small>
        </div>
        <small id="textForm" class="text_msg"></small>
        <div class="contact__button">
          <button type="submit" form="contact_form">Enviar</button>
        </div>
      </form>
      <?php if ($_GET['contact_form'] == 'error'): ?>
        <p class="submit-message">Message could not be sent.</p>
      <?php elseif (isset($_GET['contact_form'])): ?>
        <p class="submit-message">Message sent successfully!</p>
      <?php endif;?>
      <div class="contact__direct">
        <div class="contact__person">
          <p class="contact__email">nubia@nuvi.studio</p>
          <p class="contact__phone">+55 21 98767-3245</p>
        </div>
        <div class="contact__person">
          <p class="contact__email">vitor@nuvi.studio</p>
          <p class="contact__phone">+55 21 98842-3245</p>
        </div>
      </div>
      <div class="social-media">
        <a href="https://www.instagram.com/nuvistudio/" class="social-media__img" target="_blank"><img src="./assets/img/instagram.svg"
            alt="Imagem com link para rede social Instagram"></a>
        <a href="https://www.linkedin.com/company/nuvi-studio/" class="social-media__img" target="_blank"><img
            src="./assets/img/linkedin.svg" alt="Imagem com link para rede social LinkedIn"></a>
        <a href="https://dribbble.com/nuvistudio" class="social-media__img" target="_blank"><img src="./assets/img/dribbble.svg"
            alt="Imagem com link para rede social Dribbble"></a>

      </div>
      <div class="about__place">
        <img class="location-pin" src="./assets/img/based_in_rio.svg" alt="Based in Rio Brazil">
      </div>
    </div>
    <div class="copyright">
      &#169; NUVI STUDIO - DEVS <a class = "link_devs" href="https://github.com/BabiCila" target="_blank">BARBARA MEIRA</a> E <a class = "link_devs" href="https://github.com/viviandhj" target="_blank">VIVIAN DUARTE</a>
    </div>
  </footer>
  <script type="text/javascript" src="./assets/js/contato.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>