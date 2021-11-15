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
  <script type="text/javascript" src="../js/validacao.js"></script>
  <!--Início corpo do site-->


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
          <li><a id="hover" href="#"><span class="icon-gift"> PRESENTE SURPRESA</a></li>
          <li><a id="hover" href="../recados/recados.php"><span class="icon-bubble2"> RECADOS</a></li>
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


    <div class="container text-center">
      <h1 id="title_lista" class="text-center">Listar Dos Presentes Assinados</h1><br><br>
      <div class="container">
      <a href="../index.php"><button class="btn btn-primary" style="float: left;">Presentear Novamente</button></a>
      </div><br><br>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">CÓDIGO</th>
      <th scope="col" class="text-center">NOME</th>
      <th scope="col" class="text-center">APELIDO</th>
      <th scope="col" class="text-center">PRESENTE ASSINADO</th>
      <th scope="col" class="text-center">DATA</th>
      <th scope="col" class="text-center">HORÁRIO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
       <?php
              //SQL para selecionar os registros
              $result_msg_cont = ("SELECT * FROM formulario");
            

              //Seleciona os registros
              $resultado_msg_cont = $conexao->prepare($result_msg_cont);
              $resultado_msg_cont->execute();


              while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
                

                  echo "<td>" . $row_msg_cont['codigo'] . "</td>";
                  echo "<td>" . $row_msg_cont['nome']. '&nbsp'. $row_msg_cont['sobrenome'] . "</td>";
                  echo "<td>" . $row_msg_cont['apelido'] . "</td>";
                  echo "<td>" . $row_msg_cont['itens'] . "</td>";
                  echo "<td>" . $row_msg_cont["data"] . "</td>";
                  echo "<td>" . $row_msg_cont['hora'] . "</td>";
                  echo "</tr>";  
                  

              }
          ?>
    </tr>
    
  </tbody>
</table>
</div>
      


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
