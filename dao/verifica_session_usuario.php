<?php 

    // Verifica se o usuario esta logado no sistema

    if((!isset ($_SESSION['usuario_login']) == true) and (!isset ($_SESSION['senha_login']) == true)) {

        unset($_SESSION['usuario_login']); 
        unset($_SESSION['senha_login']); 

        header('location:apresentacao_agt.php');

    } else if ($_SESSION['usuario_login'] != "usuario_login") {

        unset($_SESSION['usuario_login']); 
        unset($_SESSION['senha_login']); 

        header('location:apresentacao_agt.php');
    }
?>