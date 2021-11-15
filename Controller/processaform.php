<?php
	
	include_once("../Model/conexao.php");
	
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $apelido = filter_input(INPUT_POST, 'apelido', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $itens = filter_input(INPUT_POST, 'itens', FILTER_SANITIZE_STRING);


    $get_data = "INSERT INTO formulario (nome, sobrenome, apelido, email, itens, data, hora) VALUES (:nome, :sobrenome, :apelido, :email, :itens, NOW(), NOW())";


    //$datahora = date('d-m-y H:i:s');
    $insert_data = $conexao->prepare($get_data);

    $insert_data->bindParam(':nome', $nome);
    $insert_data->bindParam(':sobrenome', $sobrenome);
    $insert_data->bindParam(':apelido', $apelido);
    $insert_data->bindParam(':email', $email);
    $insert_data->bindParam(':itens', $itens);
    
    if($insert_data->execute()){

       echo "<script>window.location='../View/index.php';alert('Muito obrigado $nome por assinar em nossa lisa, estamos super felizes pela escolha do presente ;-) ');

        </script>";
    }else{
        echo "Não foi possível enviar suas informações, verifique e tente novamente";
        
        
    }

     /*echo "<script>window.location='../View/index.php';alert('Muito obrigado $nome por assinar em nossa lisa, estamos super felizes pela escolha do presente ;-) ');

        </script>";*/

?>