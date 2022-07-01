<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../view/css/estilo5.css">
    <link rel="shortcut icon" href="../view/img/icone.png">
    <title> King of Computing </title>
</head>

<div class="container">
    <h2 class="w3-text-blue titulo">Agende sua<br> Manutenção</h2>
    <form action="../controller/istpedido.php" method="POST">
        <div class="input-field">
            <input type="text" id="inputUsuario" placeholder="Nome" name="nomePed" style="width: 50%;">
            <label for="inputUsuario">Nome:</label>
        </div>

        <div class="input-field">
            <input type="text" id="inputCpf" placeholder="CPF" required name="cpfPed" style="width: 50%">
            <label for="inputCpf">CPF:</label>
        </div>
        <div class="input-field">
            <input type="text" id="inputEndereço" placeholder="Endereço" name="endPed" style="width: 50%;">
            <label for="inputEndereço">Endereço:</label>
        </div>

        <div class="input-field">
            <input type="number" id="inputTelefone" placeholder="Telefone" required name="telPed" style="width: 30%">
            <label for="inputTelefone">Telefone:</label>
        </div>
        <div class="input-field">
            <input type="text" id="inputOque" placeholder="Oque" name="oque" >
            <textarea id="exampleFormControlTextarea1" rows="3" cols="60" name="descPed" required></textarea>
            <label class="oque" for="inputOque">O que está acontecendo com o seu Computador?</label>
        </div>

        <div class="input-field">
        <input class="w3-input w3-border w3-border-black w3-round-large" type="date" id="inputData" name="dataPed" style="width: 15%; margin-bottom: 10px;" required>
            <label for="inputData">Insira a data de hoje!!!</label>
        </div>
        <div>
        <div class="center">
            <button type="submit">Entrar</button>
        </div>
    </form>

   
<?php
    include_once("footer.php")
?>