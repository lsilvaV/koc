<?php
    session_start();
    if(!$_SESSION['usuario']){
        header('Location: ../view/entrar.php');
        exit();
    }

?>