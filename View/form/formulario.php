<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bem-vindo | Sua Festa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/stylo.css">
  <link rel="icon" type="imagem/png" href="../fav/fav2.fw.png" />
  <link rel="stylesheet" type="text/css" href="../icon/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="../js/validacao.js"></script>
 
  </head>
  <!--Início corpo do site-->
<body>

<script type="text/javascript">

</script>

 
<nav id="minhanav" class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img id="logo" src="../img/logoinicial.fw.png">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a id="hoverfixo" href="../index.php"><span class="icon-home"> HOME</a></li>
          <li><a id="hover" href="../assinados/assinados.php"><span class="icon-file-text2"> ASSINADOS</a></li>
          <li><a id="hover" href="#"><span class="icon-gift"> PRESENTE SURPRESA</a></li>
          <li><a id="hover" href="../recados/recados.php" type="button" id="btn"><span class="icon-bubble2"> RECADOS</a></li>

                  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  
  
  <script>
  
$('#btn').on('click', function() {
Swal.fire({
  type: 'success',
  title: 'Oláaaa',
  text: 'obrigado',
  timer: 3000,
})
})

  </script>
          <li><a id="hover" href="#"><span class="icon-phone"> CONTATO</a></li>
          <li><a id="hover" href="https://api.whatsapp.com/send?phone=5575991254323&text=Olá, gostaria de tirar algumas dúvidas"><span class="icon-whatsapp"></span> WHATSAPP</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <li><a id="hover" href="#"><span class="glyphicon glyphicon-user"></span> ENTRAR</a></li>
          </li>
        </ul>
      </div>
    </nav>

<div id="title_lista">
  <!--<h1>Olá, Ficaremos felizes em receber<br></h1>
  <h2> este presente de você! </h2>-->
</div><br>


<div class="container">
      <div class="col-sm-6" style="background-color: #999;"></div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5" id="caixalogin">
        <div class="">
    <form method="POST" action="../../Controller/processaform.php" onsubmit="return validaEnvio();">
        <center><img src="../img/logo.fw.png" width="210px"></center>
        <div class="checkbox">
          <label class="off"><input type="checkbox" value="Liquidificador" name="itens" checked required=""> Liquidificador</label>
        </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >Nome:</label>
    <input class="form-control"  type="text" placeholder="Digite seu nome" name="nm_formulario" required="">
    </div>
    <div class="form-group">
      <label for="ex2" class="required">Sobrenome:</label>
    <input class="form-control" id="ex2" type="text" placeholder="Digite seu sobrenome" name="sobrenome" required="">
    </div>
    <div class="form-group">
      <label for="ex2">Qual seu apelido ?</label>
    <input class="form-control" id="ex2" type="text" placeholder="Digite seu aplelido" name="apelido">
    </div>
    <div class="form-group">
      <label for="ex2" class="required">E-mail:</label>
    <input class="form-control" id="ex2" type="text" placeholder="Digite um e-mail válido" name="email" required="">
    </div>
    <div class="form-group">
      <div class="checkbox">
          <label><input type="checkbox" name="remember"> Deseja receber uma cópia por e-mail?</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" id="btn">Enviar <span class="icon-gift"></button>
        <a href="../index.php"><button type="button" class="btn btn-danger">Retornar</button></a>
  </form>
  </div>
</div>
      </div>
    </div>



<!--<div class="container">
  
  <form class="form-horizontal" method="POST" action="../../Controller/processaform.php" onsubmit="return validaEnvio();">
  <div class="row">
    <div class="col-sm-7" >
      <h1 id="title_lista" class="text-center">Estamos felizes em lhe ver por aqui !</h1>
     
    </div>
    <div class="col-sm-5" >
      <div id="caixa_form">

        
      <div class="col-sm-offset-1 col-sm-10">
        <center><img src="../img/logo.fw.png" width="210px"></center>
        <div class="checkbox">
          <label class="off"><input type="checkbox" value="Liquidificador" name="itens" checked required=""> Liquidificador</label>
        </div>
      </div>
    

<div class="form-group row">
  <div class="col-sm-offset-1 col-sm-10 ">
    <label for="ex2" class="required">Nome:</label>
    <input class="form-control"  type="text" placeholder="Digite seu nome" name="nome" required="">
  </div>
 
</div>
<div class="form-group row">
  <div class="col-sm-offset-1 col-sm-10">
    <label for="ex2" class="required">Sobrenome:</label>
    <input class="form-control" id="ex2" type="text" placeholder="Digite seu sobrenome" name="sobrenome" required="">
  </div>
  
</div>
<div class="form-group row">
  <div class="col-sm-offset-1 col-sm-10">
    <label for="ex2">Qual seu apelido ?</label>
    <input class="form-control" id="ex2" type="text" placeholder="Digite seu aplelido" name="apelido">
  </div>
  
</div>
<div class="form-group row">
  <div class="col-sm-offset-1 col-sm-10">
    <label for="ex2" class="required">E-mail:</label>
    <input class="form-control" id="ex2" type="text" placeholder="Digite um e-mail válido" name="email" required="">
  </div>
  
</div>

<div class="form-group">        
      <div class="col-sm-offset-1 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Deseja receber uma cópia por e-mail?</label>
        </div>
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-primary" id="btn">Enviar <span class="icon-gift"></button>
        <a href="../index.php"><button type="button" class="btn btn-danger">Retornar</button></a>-->

           <!---<script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  
  
  <script>
  
$('#btn').on('click', function() {
Swal.fire({
  type: 'success',
  title: 'Oláaaa',
  text: 'obrigado',
  timer: 3000,
})
})

  </script>-->
      </div>
    </div>

    </div>
  </div>
  </form>
</div>
</div>

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
