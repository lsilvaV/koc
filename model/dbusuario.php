<?php
    //INSERIR USUÁRIO
    function inserirUsuario($conexao, $usuario, $senha){

        $crypto = password_hash($senha, PASSWORD_DEFAULT);

        $query = "insert into login(usuario, senha) values ('{$usuario}','{$crypto}')";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    //VERIFICAR SENHA
    function verify($conexao, $usuario, $senha){
        $query = "select * from login where usuario = '{$usuario}'";
        $res = mysqli_query($conexao, $query);

        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);

            if(password_verify($senha, $row["senha"])){
                $_SESSION["usuario"] = $row["usuario"];

                return $row["usuario"];
                
            }else{
                return "Senha não confere";
            }
        }
    }
?>