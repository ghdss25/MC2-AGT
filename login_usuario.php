<?php require_once "dao/gerenciar_usuario.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login dos Usuarios AGT</title>
    <link rel="stylesheet" href="css/login_usuario.css">
</head>
<body>

    <div id="container-form">

        <h1>Entrar</h1>

        <form method="POST" action="?go=loginUsuario">

            <input type="nome" name="usuario_login" placeholder="Login">
            <input type="password" name="senha_login" placeholder="Senha">
            <input type="submit" value="Entrar">

            <a href="cadastrar_usuario.php" class="button">
            <input type="button" class="button" value="Cadastrar Usuario"></a>

        </form>

    </div>

</body>
</html>