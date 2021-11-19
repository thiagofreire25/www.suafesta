<?php
include_once '../../Model/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bem-vindo | Sua Festa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/stylo.css">
  <link rel="icon" type="imagem/png" href="../fav/fav2.fw.png" />
  <link rel="stylesheet" type="text/css" href="cadastro.css">
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
          <li><a id="hover" href="#"><span class="icon-phone"> CONTATO</a></li>
          <li><a id="hover" href="https://api.whatsapp.com/send?phone=5575991254323&text=Olá, gostaria de tirar algumas dúvidas"><span class="icon-whatsapp"></span> WHATSAPP</a></li>
        </ul>
        
      </div>
    </nav>


    <div class="container">
      <div class="col-sm-7"></div>
      
      <div class="col-sm-5" id="caixalogin">
        <div class="">
    <form method="POST" action="../../Controller/processa_cadastro.php">
        <center><img src="../img/logo.fw.png" width="210px"></center>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >Nome:</label>
      <input type="nome" name="nm_cadastro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digide seu nome completo" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >E-mail:</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digide seu e-mail" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >Usuário:</label>
      <input type="nome" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digide um nome de usuário" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="required">Senha:</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="required" >Repetir Senha:</label>
      <input type="password" name="confirmasenha" class="form-control" id="exampleInputPassword1" placeholder="Digite novamente sua senha" required="">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1"> Receber informações por e-mail</label>
    </div>
    <button type="submit" class="btn btn-success" url="../index.html">Cadastrar</button>
    <a href="../login/login.php"><button type="button" class="btn btn-danger">Retornar</button></a>
  </form>
  </div>
</div>
      </div>
    </div>


    <!--<div class="row">
      <div class="container" id="login">
      <div class="col-sm-4" id="imglogin"><img src="../img/imgcadastro.fw.png" width="100%" style="margin-top: 110px;"></div>
      <div class="col-sm-8" id="caixalogin">
        <form method="POST" action="../../Controller/logar.php">
        <center><h2>Cadastre-se</h2></center>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >Nome:</label>
      <input type="nome" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digide seu nome completo" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >E-mail:</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digide seu e-mail" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="required" >Usuário:</label>
      <input type="nome" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digide um nome de usuário" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="required">Senha:</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="required" >Repetir Senha:</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite novamente sua senha" required=""><br>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1"> Receber informações por e-mail</label>
    </div>
    <button type="submit" class="btn btn-primary" url="../index.html">Cadastrar</button>
    <button type="submit" class="btn btn-primary" url="../index.html">Retornar</button>
  </form>
      </div>
      </div>
    </div>-->
<!--Início tela de login-->
<!---<div class="container" id="login">
  <div class="">
    <form method="POST" action="../../Controller/logar.php">
      <img src="../logo/logo.png">
    <div class="form-group">
      <label for="exampleInputEmail1">Usuário:</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex.: exemplo@mail.com" required="">
      <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha:</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" required=""><br>
      <p>Não tem conta?<a href="cadastro.html"> Criar agora</a></p>
      <a href="config/config.php">Esqueceu a senha?</a>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1"> Mantenha-me conectado</label>
    </div>
    <button type="submit" class="btn btn-primary" url="../index.html">Continuar</button>
  </form>
  </div>
</div>-->
<!--Final tela de login-->
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
