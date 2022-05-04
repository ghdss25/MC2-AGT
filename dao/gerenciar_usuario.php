<?php 

    # Função para cadastrar Usuário 
    if(@$_GET['go'] == 'cadastrarUsuario'){

        $login = $_POST['login']; 
        $senha = md5($_POST['senha']);

        require_once 'conexao.php'; 

        $sql_query_verifica_usuario = $dbcon->query("SELECT id FROM usuario WHERE usu_login = '$login'");  

        $linhas = mysqli_num_rows($sql_query_verifica_usuario); 

        $linhas = mysqli_num_rows($sql_query_verifica_usuario); 

        if($linhas > 0) {

            echo "<script>alert('Usuário já Cadastrado !');</script>"; 
            echo "<meta http-equiv='refresh' content='0, url=./cadastrar_usuario.php'>";

        } else {

            $sql_query = $dbcon->query("INSERT INTO usuario (usu_login, usu_senha) VALUES('$login', '$senha')"); 

            if($sql_query) {

                echo "<script>alert('Usuário Cadastrado com Sucesso !');</script>";

                echo "<meta http-equiv='refresh' content='0, url=./cadastrar_usuario.php'>"; 

                header('location:./login_usuario.php');

            } else {

                echo "<script>alert('Erro ao Cadastrar Usuário !');</script>"; 

                
            }
        }
    }

     ## Função para Logar no Sistema 
     if(@$_GET['go'] == 'loginUsuario') {

        // inicia a sessão 
        session_start(); 

        // as variáveis login e senha recebem os dados digitados na página anterior 
        $user = $_POST['usuario_login']; 
        $pwd = md5($_POST['senha_login']);

        require_once 'conexao.php'; 

        $sql_query_login = $dbcon->query("SELECT id, usu_login FROM usuario WHERE usu_login = '$user' AND usu_senha = '$pwd'");

        //se existir usuário faça: 
        if(mysqli_num_rows($sql_query_login) > 0) {

            //printa uma mensagem alertando > login c/ sucesso 
            echo "<script>alert('Usuário logado com sucesso.');</script>"; 

            $_SESSION['usuario_login'] = $user; 
            $_SESSION['senha_login'] = $pwd; 

            echo "<script>location.href='./menu_agt.php';</script>"; 

            // Captura os dados do Usuário 
            while ($dados = $sql_query_login->fetch_array()) {

                $idUser = $dados['id']; 
                $login = $dados['usu_login']; 
            }

            $_SESSION['usuario_login'] = $login; 
            $_SESSION['idUser'] = $idUser;

            // Verifica o login do Usuario 
            if ($login == 'usuario_login') {

                echo "<script>location.href='./menu_agt.php';</script>"; 
            }

        } else {

            //printa uma mensagem alertando > login errado 
            echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>"; 

            //limpa os campos (login e senha) 
            unset ($_SESSION['usuario_login']); 
            unset ($_SESSION['senha_login']); 

            //direciona para a pagina inicial 
            header('location:./apresentacao_agt.php');
        }
    }
   
?>