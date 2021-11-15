<?php

include_once("../../Model/conexao.php");

try {
    $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

    $query = "SELECT * FROM formulario";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    /*echo $row;
    if($row == 1){
        $sql = $conexao->prepare("update meubanco.usuario set email='$email', senha='$senha' where email='$email'");
        $sql->execute();
        echo ("<script>
        
        window.location.href='../View/login/login.html';
        </script>");
        //header('Location: eltsenha.html');
        /*$sql = $editarsenha->prepare("update meubanco.usuario set senha= 6 where email=$email");

    }else{
        echo ("<script>
        window.alert('E-mail informado não existe, por gentileza informe um e-mail válido')
        window.location.href='../login.html';
        </script>");
    }*/
    
} 
catch(PDOException $e) {
    echo "ERROR NA CONXÃO" . $e-> getMessage();
}

 ?>