<?php
    include("../model/conexao.php"); 
    include("../model/dbusuario.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(inserirUsuario($conexao, $usuario, $senha)){  
?>

    <div class="central">
        <h1> CADASTRO EFETUADO COM SUCESSO </h1>
    </div>

<?php }else{ ?>

    <div class="central">
        <h1> CADASTRO NÃO EFETUADO </h1>
    </div>

<?php } ?>


    

