<?php
	
	include_once("../Model/conexao.php");
	
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
   $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
   $confirmsenha = filter_input(INPUT_POST, 'confirmsenha', FILTER_SANITIZE_STRING);


    $get_data = "INSERT INTO cadastros (nome, email, usuario, senha, confirmsenha) VALUES (:nome, :email, :usuario, :senha, :confirmsenha)";


    //$datahora = date('d-m-y H:i:s');
    $insert_data = $conexao->prepare($get_data);

    $insert_data->bindParam(':nome', $nome);
    $insert_data->bindParam(':email', $email);
    $insert_data->bindParam(':usuario', $usuario);
    $insert_data->bindParam(':senha', $senha);
    $insert_data->bindParam(':confirmsenha', $confirmsenha);
    
    if($insert_data->execute()){

       echo "<script>window.location='../View/login/login.php?#fazerlogin';alert('Seja bem-vindo $nome, O seu cadastro foi realizado com sucesso! ;-) ');

        </script>";
    }else{
        echo "Não foi possível enviar suas informações, verifique e tente novamente";
        
        
    }

     /*echo "<script>window.location='../View/index.php';alert('Muito obrigado $nome por assinar em nossa lisa, estamos super felizes pela escolha do presente ;-) ');

        </script>";*/

?>