<?php require_once "dao/gerenciar_usuario.php"; ?>

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

        <h1>Cadastrar Usuario </h1>

        <form method="POST" action="?go=cadastrarUsuario">

            <input type="nome" name="login" placeholder="Login">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Cadastrar">

        </form>

    </div>

</body>
</html>