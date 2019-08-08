<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?= $this->view->dados['title'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="App/Views/template/files/imgs/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7COpen%20Sans%3A400%2C300%7CMontserrat%3Aregular%2C700&subset=" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="App/Views/template/css/custom.css">
<?php
  if($this->view->dados['title']=="Início | Souza e Souza")
  { ?>
    <link rel="stylesheet" href="App/Views/template/css/carousel.css">
    <link rel="stylesheet" href="App/Views/template/css/forms.css">
<?php
  }
?>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="nav">
        <div id="divLogo">
          <a class="logo" href="/"><img src="App/Views/template/files/imgs/logo.png" id="logo" alt="Logotipo"></a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation" id="bt-menu">
          <span class="navbar-toggler-icon" id="bt-menu-icon"></span>
        </button>
        </div>
        
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/" id="nav-link">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre" id="nav-link">Sobre</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">O que fazemos</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="nav-link" href="assessoria" id="submenu-item">Assessoria</a>
                <a class="nav-link" href="consultoria" id="submenu-item">Consultoria</a>
                <a class="nav-link" href="contabil" id="submenu-item">Contábil</a>
                <a class="nav-link" href="fiscal" id="submenu-item">Fiscal</a>
                <a class="nav-link" href="departamento-pessoal" id="submenu-item">Departamento pessoal</a>
                <a class="nav-link" href="outsourcing" id="submenu-item">Outsourcing</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato" id="nav-link">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section>
        <?= $this->content() ?>
    </section>
    
    <footer>
        <div style="background-color:#2d3034;">
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div style="background-color:#212326;color:rgb(200,200,200);">
          <h5 style="width:100%;text-align:center;margin:0;padding:23px 0px 20px 0px;">
            Desenvolvido por <a href="https://www.lucasdeveloper.com.br/" style="outline:none;">Lucas Costa Alves</a>
          </h5>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>