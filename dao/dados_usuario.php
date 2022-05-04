<?php

    header('Content-Type: text/html; charset=utf-8'); 

    require_once 'conexao.php'; 

    $sql_query_dados = $dbcon->query("SELECT id, usu_login FROM usuario WHERE usu_login");  

    while ($dados = $sql_query_dados->fetch_array()) {

        $idUser = $$_SESSION['id']; 
        $login = $dados['usu_login'];
    }
?>