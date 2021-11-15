<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bem-vindo | Sua Festa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="imagem/png" href="fav/fav2.fw.png" />
  <link rel="stylesheet" type="text/css" href="css/stylo.css">
  <link rel="stylesheet" type="text/css" href="icon/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Início corpo do site-->
  <style>
        .jumbotron {
            background: url("img/casal1.fw.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin-bottom: 0px;
        }
</style>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/img0.png" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="img/img1.png" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
      <div class="item">
        <img src="img/img2.fw.png" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  



<nav id="minhanav" class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img id="logo" src="img/logoinicial.fw.png">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a id="hoverfixo" href="index.php"><span class="icon-home"> HOME</a></li>
          <li><a id="hover" href="assinados/assinados.php"><span class="icon-file-text2"> ASSINADOS</a></li>
          <li><a id="hover" href="#"><span class="icon-gift"> PRESENTE SURPRESA</a></li>
          <li><a id="hover" href="recados/recados.php"><span class="icon-bubble2"> RECADOS</a></li>
          <li><a id="hover" href="#"><span class="icon-phone"> CONTATO</a></li>
          <li><a id="hover" href="https://api.whatsapp.com/send?phone=5575991254323&text=Olá, gostaria de tirar algumas dúvidas"><span class="icon-whatsapp"></span> WHATSAPP</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <li><a id="hover" href="login/login.php"><span class="glyphicon glyphicon-user"></span> ENTRAR</a></li>
          </li>
        </ul>
      </div>
    </nav>

<div id="title_lista">
  <h1>Minha Lista</h1>
</div>

<div class="container-fluid">    
  <div class="row">
    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading"> Um Liquidificador</div>
        <div class="panel-body"><img src="img/liquidificador.jpg" class="img-responsive" style="width:100%;" alt="Image"></div>
        <center><a href="form/formulario.php"><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></a></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">PANELA DE PRESSÃO</div>
        <div class="panel-body"><img src="img/paneladepressao.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Uma CAFETEIRA</div>
        <div class="panel-body"><img src="img/cafeteira.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading"> Um Air Fryer</div>
        <div class="panel-body"><img src="img/airfryer.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading"> Um Micro-ondas</div>
        <div class="panel-body"><img src="img/micro_ondas.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading"> Churras. Elétrica</div>
        <div class="panel-body"><img src="img/churas_eletrica.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
  </div>
</div><br>

<div class="container-fluid">    
  <div class="row">
    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Uma Sanduicheira</div>
        <div class="panel-body"><img src="img/imgsanduicheira.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Uma Chaleira</div>
        <div class="panel-body"><img src="img/chaleira.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Conjunto de pratos</div>
        <div class="panel-body"><img src="img/pratos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Aspirador de pó</div>
        <div class="panel-body"><img src="img/aspiradordepo.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading"> Purificador</div>
        <div class="panel-body"><img src="img/purificador.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Forno Elétrico</div>
        <div class="panel-body"><img src="img/forninho.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
  </div>
</div><br>

<div class="container-fluid">    
  <div class="row">
    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Uma Batedeira</div>
        <div class="panel-body"><img src="img/batedeira.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Espremedor</div>
        <div class="panel-body"><img src="img/espremedor.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Jogo de talheres</div>
        <div class="panel-body"><img src="img/jogotalheres.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Jogo de Cama casal</div>
        <div class="panel-body"><img src="img/jogocama.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Jogo de Cama casal</div>
        <div class="panel-body"><img src="img/jogocama.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div id="nome_item" class="panel-heading">Jogo de Cama casal</div>
        <div class="panel-body"><img src="img/jogocama.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <center><div class="panel-footer"><button type="button" class="btn btn-primary">PRESENTEAR <span class="icon-gift"></button></div></center>
      </div>
    </div>
  </div>
</div><br>


<center><nav aria-label="Navegação de página exemplo">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próximo</a>
    </li>
  </ul>
</nav></center>

 <!--Final corpo do site-->
<footer class="container-fluid text-center">
  <div class="social">
    <a href="#"><span class="icon-facebook2"></a>
    <a href="#"><span class="icon-twitter"></a>
    <a href="#"><span class="icon-instagram"></a>
    <a href="#"><span class="icon-youtube2"></a>
  </div>
  <div class="suporte">
    <a href="#">Home</a>
    <a href="#">Contato</a>
    <a href="#">Enviar Feedback</a>
    <a href="#">Ajuda</a>
  </div>
  <p>Política de privacidade | © 2021 Dev web. Todos os direitos reservados.</p>  
  
</footer>

</body>
</html>
