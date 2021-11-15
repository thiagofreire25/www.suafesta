<?php
	//include_once("../Model/conexao.php");
	
	try {
		$conn = new PDO("mysql:host=localhost;dbname=suafesta", "root", "");
		
	} catch (PDOException $e) {

		echo $e->getMessage();
	}

	$pagina = (!isset($_GET['pagina'])) ? 1 : $_GET['pagina'];

	$sqlExec = $conn->prepare("select codigo, nome_iten from itens");
	$sqlExec->execute();
	$result = $sqlExec->fetchAll();

	$exibir = 3;
	$total = ceil((count($result)/$exibir)) ;

	$inicioExibir = ($exibir * $pagina) - $exibir;

	$sqlExec1 = $conn->prepare("select codigo, nome_iten from itens limit $inicioExibir, $exibir");
	$sqlExec1->execute();
	$result1 = $sqlExec1->fetchAll();

	


?>

