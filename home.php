<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel='stylesheet' type='text/css' href='css/meu_stilo.css'>

</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
       <!-- <a class="navbar-brand" href="#">Logo</a> -->
        <!-- DCA LOGO -->
                <a href='#'>
                  <div class='dca container_logo'>
                    <article class='dca caption'>
                      <div class='dca container_line'>
                        <div class='dca line'></div>
                        <div class='dca line'></div>
                        <div class='dca line'></div>
                        <div class='dca line'></div>
                        <div class='dca line'></div>
                        <div class='dca line'></div>
                        <div class='dca line'></div>
                      </div>
                      <div class='dca overlay'>
                        <h1>D<span>C</span>A</h1>
                      </div>
                    </article>
                  </div>
                </a>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
        </ul>
      </div>
    </div>
  </nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-1 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
      <h1>Jean Mário Moreira de Lima</h1>
      <p>Engenheiro de Computação do Departamento de Engenharia de Computação e Automação da Universidade Federal do Rio Grande do Norte desde abril de 2017. Doutorando em Engenharia Elétrica e de Computação pelo Programa de Pós Graduação em Engenharia Elétrica e de Computação da Universidade Federal do Rio Grande do Norte, Mestre em Engenharia Mecatrônica (2018) pelo Programa de Pós Graduação em Engenharia Mecatrônica da Universidade Fderal do Rio Grande do Norte. É Engenheiro de Computação (2016) e Bacharel em Ciências e Tecnologia (2013), ambos pela Universidade Federal do Rio Grande do Norte. Também é Técnico em Automação Industrial (2015) pelo North Island College , Courtenay/BC, Canadá. Suas áreas de interesse são inteligência artificial, aprendizado de máquina e controle inteligente. </p>
      <hr>
      <h3>Produções</h3>
      <p>Em construção...</p>
    </div>
    <div class="col-sm-1 sidenav">
      
    </div>
  </div>
</div>

<!-- 
      # FOOTER / RODAPE
    -->  
    <footer id='footer'>
      <div class='container wow fadeInLeftBig'>
        <div class='row'>
          <div class='col-lg-2 col-md-2 col-sm-2'>
            <div class='logo'>
              <img src='img/brasao-ufrn.png' alt='UFRN Logo'>
            </div>
          </div>
          <div class='col-lg-10 col-md-10 col-sm-10'>
            <div class='institution'>
              <p><span>Departamento de Engenharia de Computação e Automação</span><br>
              Universidade Federal do Rio Grande do Norte - Centro de Tecnologia</p>
              <address class='contact-info'>
                <p><span class='fa fa-map-marker'></span>UFRN Campus Universitário Lagoa Nova - 59078-970 - Natal/RN - BRASIL</p>
                <p><span class='fa fa-phone'></span>+55 (84) 3342-2231 (ext 220 ou 200)</p>
                <p><span class='fa fa-envelope-o'></span><?php echo hide_email('secretaria@dca.ufrn.br',0); ?></p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>
