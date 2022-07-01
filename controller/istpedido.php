<?php
    include("../model/conexao.php"); 
    include("../model/dbpedido.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(inserirPedido($conexao, $nomePed, $cpfPed, $endPed, $telPed, $descPed, $dataPed)){  
?>

    <div class="central">
        <h1> PEDIDO EFETUADO COM SUCESSO </h1>
    </div>

<?php }else{ ?>

    <div class="central">
        <h1> PEDIDO NÃO EFETUADO </h1>
    </div>

<?php } ?>