<?php
    include_once("header.php")
?>

<div class="container">
    <h2 class="w3-text-blue">Cadastre-se</h2>
    <form action="../controller/istusuario.php" method="POST">

        <div class="input-field">
            <input type="text" id="inputUsuario" placeholder="Usuário" name="usuario" style="width: 100%;">
            <label for="inputUsuario">Nome:</label>
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
            <button type="submit">Cadastrar</button>
        </div>
</form>

<?php
    include_once("footer.php");
    include_once("logoenca.php");
?>