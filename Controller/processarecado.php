<?php
	
	include_once("../Model/conexao.php");
	
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $recado = filter_input(INPUT_POST, 'recado', FILTER_SANITIZE_STRING);


    $get_data = "INSERT INTO recados (nome, recado, data, hora) VALUES (:nome, :recado, NOW(), NOW())";


    //$datahora = date('d-m-y H:i:s');
    $insert_data = $conexao->prepare($get_data);

    $insert_data->bindParam(':nome', $nome);
    $insert_data->bindParam(':recado', $recado);
    
    if($insert_data->execute()){

       echo "<script>window.location='../View/recados/recados.php?#recado';alert('O seu recado foi enviado com sucesso $nome muito obrigado ;-) ');

        </script>";
    }else{
        echo "Não foi possível enviar suas informações, verifique e tente novamente";
        
        
    }

     /*echo "<script>window.location='../View/index.php';alert('Muito obrigado $nome por assinar em nossa lisa, estamos super felizes pela escolha do presente ;-) ');

        </script>";*/

?>