<?php
	
	// Importar a conexão com BD
	require "../../Model/conexao.php";
	
	//Importar a class Usuario
	require 'Usuario.php';

	// Cria um user
	$u = new Usuario();	

	// Guardar dados enviados pelo form de login
	$usuario =addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);


	if($u->login($usuario, $senha) == true){
		if(isset($_SESSION['codUser'])) {
			header("location: ../../View/login/login.php");
		} else {
			header("location: ../../View/index.php");
		}
	} else {
		echo ("<script>
        window.alert('Usuário ou Senha estão incorretos ou não existe em nossa Base de dados, verifique e tente novamente')
        window.location.href='../../View/login/login.php';
    	</script>");
	}

?>