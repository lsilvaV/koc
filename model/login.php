<?php
    session_start();
    include("../model/dbusuario.php");
    include("../model/conexao.php");

    //LOGIN
    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header("Location: ../view/entrar.php");
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select * from login where usuario = '{$usuario}' and senha = '{$senha}'";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    
    $acesso = verify($conexao, $usuario, $senha);

    if($row == 1 || $usuario === $acesso){
        $_SESSION['usuario'] = $usuario;
        header("Location: ../view/index.php");
        exit();

    }else{
        $_SESSION['nAuth'] = true;
        header("Location: ../view/entrar.php");
        exit();
    }

?>