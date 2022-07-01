<?php

    //INSERIR PEDIDO
    function inserirPedido($conexao, $nomePed, $cpfPed, $endPed, $telPed, $descPed, $dataPed){
        $query="insert into pedido(nomePed, cpfPed, endPed, telPed, descPed, dataPed) values('{$nomePed}','{$cpfPed}','{$endPed}','{$telPed}', '{$descPed}', '{$dataPed}')";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

?>