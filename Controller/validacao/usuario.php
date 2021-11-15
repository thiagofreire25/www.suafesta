<?php
class Usuario {

    public function login($usuario, $senha) {
        // Utiliza conexao criada na raiz
        global $conexao;

        // Verifica se o email e senha são iguais aos que serão recebidos
        $sql = "Select * FROM suafesta.cadastros WHERE usuario = :usuario AND senha = :senha";

        // $sql é nada mais nada menos que a tabela usuario

        $sql = $conexao->prepare($sql);

        // Passa o valor recebido do parametro na variavel
        $sql->bindValue("usuario", $usuario);
        $sql->bindValue("senha", $senha);

        $sql->execute();

        // Se quantidade de registros > 0
        if($sql->rowCount() > 0) {
            // Fetch - cria um array e retorna apenas uma linha dele
            $dado = $sql->fetch();

            echo $sql->rowCount();

            // Mostre a linha que está na posição do codigo que bate o email e a senha
            //echo $dado['codigo'];

            // Salvar o codigo do usuario no navegador
            $_SESSION["codUser"] = $dado['codigo'];
            
            return true;
        } else {
            return false;
        }

    }

    public function logged($pCode) {
        global $conexao;

        $array = array();

        $sql = "Select nome FROM usuario WHERE codigo = :codigo";
        $sql = $conexao->prepare($sql);
        $sql->bindValue("codigo", $pCode);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array; 
    }

    //A função login acessa a tabela usuario, recebi os dados do formulario(email e senha), Se houver pelo menos um registro(ou seja os dados existirem), acessa o dado - Fetch, e grava o codigo do usuario na session
}