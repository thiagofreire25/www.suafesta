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
  
  <form class="form-horizontal" method="POST" action="../../Controller/processarecado.php" >
  <div class="row">
    <div class="col-sm-7" >
      <h1 id="title_lista" class="text-center">Veja aqui todos os recados</h1>
     <img src="../img/img_recado.fw.png" style="width:100%">
    </div>
    <div class="col-sm-5" >
      <div id="caixa_recado">

 
 <center><img src="../img/logo.fw.png" width="210px"></center>
<div class="form-group row">
  <div class="col-sm-offset-1 col-sm-10 ">
    <label for="ex2" class="required">Nome:</label>
    <input class="form-control"  type="text" placeholder="Digite seu nome" name="nome" required="">
  </div>
 
</div>

<div class="form-group row">
  <div class="col-sm-offset-1 col-sm-10 ">
    
    <center><textarea style="width: 100%; height: 200px;" type="text" class="form-control" placeholder="Digite aqui seu recado" id="pwd" name="recado" required></textarea></center><br>
  </div>
  
</div>




<div class="form-group">        
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-success" id="btn">Enviar recado <span class="icon-bubbles4"></button>
        <a href="../index.php"><button type="button" class="btn btn-danger">Retornar</button></a>

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
<div><h1 id="title_lista" class="text-center">De olho nos Recados</h1><br></div>
<div class="container " id="recado">
      
      
      <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col" class="" >NOME</th>
      <th scope="col" class="" >RECADO</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
       <?php
              //SQL para selecionar os registros
              $result_msg_cont = "SELECT * FROM recados";
            

              //Seleciona os registros
              $resultado_msg_cont = $conexao->prepare($result_msg_cont);
              $resultado_msg_cont->execute();


              while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
                

                  
                  echo "<td><span class='icon-envelop'> " . $row_msg_cont['nome']. "</td>";
                  echo "<td><i> <span class='icon-bubble2'> "  . $row_msg_cont['recado'] . "</i></td>";
                  echo "</tr>";  
                  

              }
          ?>
    </tr>
    
  </tbody>
</table>

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
