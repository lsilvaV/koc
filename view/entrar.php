<?php
session_start();
include_once("header.php");
?>


<div class="container">
    <h2 class="w3-text-blue">Login</h2>
    <form action="../model/login.php" method="POST">

        <div class="input-field">
            <input type="text" id="inputUsuario" placeholder="Usuário" required name="usuario" style="width: 100%;">
            <label for="inputUsuario">Usuário:</label>
        </div>

        <div class="input-field">
            <input type="password" id="inputSenha" placeholder="Senha" required name="senha" style="width: 100%">
            <label for="inputSenha">Senha:</label>
        </div>
        <div>

            <?php
            if (isset($_SESSION['nAuth'])) :
            ?>
                <p> Usuário ou senha inválidos! </p>
            <?php
            endif;
            unset($_SESSION['nAuth']);
            ?>
        </div>

        <div class="center">
            <button type="submit">Entrar</button>
        </div>
    </form>
    

    <form action="../view/cadastro.php" method="POST">
        <div class="links-uteis">
            <a href="../view/cadastro.php">Ainda não sou cadastrado</a>
        </div>
    </form>

   

    <?php
    include_once("footer.php");
    include_once("logoenca.php");
    ?>