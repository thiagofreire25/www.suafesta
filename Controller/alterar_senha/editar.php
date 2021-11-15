<?php

include_once("../../Model/editarsenha.php");

//Faz a conexão com o banco
try {
    $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Armazena as informações passadas pelo usuário na tela de recuperação de senha!
    $nome = mysqli_real_escape_string($editarsenha, $_POST['nome']);
    $email = mysqli_real_escape_string($editarsenha, $_POST['email']);
    $usuario = mysqli_real_escape_string($editarsenha, $_POST['usuario']);
    $senha = mysqli_real_escape_string($editarsenha, $_POST['senha']);
    $confirmsenha = mysqli_real_escape_string($editarsenha, $_POST['confirmsenha']);

    //Faz o select no banco para saber se tem nomem e-mail e usuário iguais!
    $query = "SELECT nome, email, usuario FROM suafesta.cadastros where nome = '{$nome}' and email = '{$email}' and usuario = '{$usuario}'";

    //Pega o resultado!
    $result = mysqli_query($editarsenha, $query);
    $row = mysqli_num_rows($result);

    //teste echo $row;
    //Faz o update no banco alterando a senha e a senha de confirmação onde o e-mail é = ao passado! 
    if($row == 1){
        $sql = $conexao->prepare("update suafesta.cadastros set senha='$senha', confirmsenha='$confirmsenha' where email='$email'");
        $sql->execute();
        //Se tudo estiver ok a senha é alterada e aparece uma alerta informando!
        echo ("<script>
        window.alert('Senha alterada com sucesso, clique em ok e faça login!')
        window.location.href='../../View/login/login.php';
        </script>");

    }else{
        //Caso não exista as informações no banco irá aparece um alerta informando e solicitando os dados corretos!
        echo ("<script>
        window.alert('Dados informado não existem, por gentileza informe os dados correto.')
        window.location.href='../../View/senha/recuperar.php';
        </script>");
    }
    
} 
//Caso exista erro de conexão!
catch(PDOException $e) {
    echo "ERROR NA CONXÃO" . $e-> getMessage();
}

 ?>