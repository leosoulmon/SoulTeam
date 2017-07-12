<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Soul Team - Inicio</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="lib/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/css.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="lib/materialize/js/materialize.js"></script>
  <script src="js/init.js"></script>
  <link href="https://use.fontawesome.com/6a6867f07c.css" media="all" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar-fixed blue-grey darken-4 white-text" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
          <!-- <span class="orange-st-text">S</span>oul Te<span class="orange-st-text">a</span>m -->
          <img src="img/logo-st.png" alt="Logo da empresa Soul Team" class="logo-st responsive-img" id="logo-st">
        </a>
        <ul class="right hide-on-med-and-down">
          <li>
            <a href="#">Sobre</a>
          </li>
          <li>
            <a href="#">Serviços</a>
          </li>
          <li>
            <a href="#">Portifolio</a>
          </li>
          <li>
            <a href="#">Contato</a>
          </li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li>
            <a href="#">Sobre</a>
          </li>
          <li>
            <a href="#">Serviços</a>
          </li>
          <li>
            <a href="#">Portifolio</a>
          </li>
          <li>
            <a href="#">Contato</a>
          </li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </header>
  <main>
    <!-- HOME -->
    <section class="inicio scrollspy light-blue-st" id="inicio">
      <div class="container">
        <h1 class="center white-text pg-title">Soluções que sua empresa precisa!</h1>
        <div class="row">
          <img src="img/img-introcucao.png" alt="imagem de introduação a empresa" class="img-intro-info responsive-img" id="img-intro-info" >
        </div>
      </div>
    </section>
    <!-- SOBRE -->
    <section class="sobre scrollspy blue-grey lighten-3" id="sobre">
      <div class="container">
        <h1 class="left-align blue-text text-darken-4 pg-title">Quem somos</h1>
        <div class="row">
          <div class="col l5 m5 s12">
            <img src="img/img-sobre.png" alt="imagem da pagina de sobre" class="img-sobre-info responsive-img" id="img-sobre-info">
          </div>
          <div class="col l5 m5 s12 offset-l2 offset-m2 blue-text text-darken-4 info-sobre-font">
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
          </div>
        </div>
      </div>
    </section>
    <!-- SERVIÇOS -->
    <section class="servicos scrollspy orange-st white-text" id="servicos">
      <div class="container">
        <h1 class="left-align pg-title">Serviços</h1>
        <div class="row">
          <div class="col l5 m5 s12 center">
            <img src="img/img-servico-dev.png" alt="imagem da pagina de servico" class="img-servico-info responsive-img" id="img-servico-info">
            <h2 class="tit-servico-info">Desenvolvimento Web</h2>
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
          </div>
          <div class="col l5 m5 s12 offset-l1 offset-m2 center">
            <img src="img/img-servico-design.png" alt="imagem da pagina de servico" class="img-servico-info responsive-img" id="img-servico-info">
            <h2 class="tit-servico-info">Design Gráfico</h2>
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
            Lorem ipsum dolor sit, consectur adispicing elit.
          </div>
        </div>
      </div>
    </section>
    <!-- CONTATO -->
    <section class="contato scrollspy blue-st" id="contato">
      <div class="container">
        <h1 class="left-align white-text pg-title">Contato</h1>
        <form class="formulario row">
          <div class="col l5 m12 s12">
              <div class="input-field">
                <input id="nome" type="text" class="validate nome white-text" name="nome">
                <label class="white-text" for="nome">Nome</label>
              </div>
              <div class="input-field">
                <input id="email" type="email" class="validate email white-text" name="email">
                <label class="white-text" for="email">Email</label>
              </div>
              <div class="input-field">
                <input id="telefone" type="text" class="validate telefone white-text" name="telefone">
                <label class="white-text" for="telefone">Telefone</label>
              </div>
              <div class="input-field">
                <textarea id="mensagem" class="materialize-textarea mensagem white-text"></textarea>
                <label class="white-text" for="mensagem">Mensagem</label>
              </div>
              <div class="row">
                <button class="btn waves-effect waves-light right grey blue-st" type="submit" name="action">
                  Enviar
                </button>
              </div>
          </div>
          <div class="col l5 m12 s12 offset-l2 white-text">
            <p class="row info-contato-font">
              <i class="material-icons">phone</i> (13) xxxx-xxxx
            </p>
            <p class="row info-contato-font">
              <i class="fa fa-whatsapp" aria-hidden="true"></i> (13) xxxxx-xxxx
            </p>
            <p class="row info-contato-font">
              <i class="material-icons mail-icon">mail_outline</i> soulteamco@gmail.com
            </p>
            <p class="row">
              <img src="img/img-contato.png" alt="imagem de contato" class="img-contato responsive-img" id="img-contato">
            </p>
          </div>
        </form>
      </div>
    </section>
  </main>
  <footer class="page-footer blue-grey darken-4 white-text">
    <div class="container">
      <div class="row">
        <h2>
          <span class="orange-st-text">S</span>oul Te<span class="orange-st-text">a</span>m
        </h2>
      </div>
      <div class="row">
        <div class="col l5 s12">
          <h5 class="">Mapa do site</h5>
          <ul>
            <li>
              <a class="white-text" href="#">Sobre</a>
            </li>
            <li>
              <a class="white-text" href="#">Serviços</a>
            </li>
            <li>
              <a class="white-text" href="#">Portifolio</a>
            </li>
            <li>
              <a class="white-text" href="#">Contato</a>
            </li>
          </ul>
        </div>
        <div class="col l5 s12">
          <h5 class="">Institucional</h5>
          <ul>
            <li>
              <a class="white-text" href="#">FAQ</a>
            </li>
            <li>
              <a class="white-text" href="#">Missão e valores</a>
            </li>
            <li>
              <a class="white-text" href="#">Quem somos</a>
            </li>
          </ul>
        </div>
        <div class="col l2 s12">
          <h5 class="">Rede Sociais</h5>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <a class="white-text" href="#">Equipe de desenvolvimento</a>
      </div>
    </div>
  </footer>
</body>
</html>
