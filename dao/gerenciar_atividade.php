<?php 
    require_once 'conexao.php';
    session_start();

    if(@$_GET['go'] == 'agendarAtividade') {
        $status = $_POST['status']; 
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao']; 
        $inicio = $_POST['inicio']; 
        $termino = $_POST['termino'];
        $idUser = $_SESSION['idUser'];


        if ($status != "Selecione") {

            $sql_query = $dbcon->query("INSERT INTO atividade(ativi_status, ativi_nome, ativi_descricao, ativi_inicio, ativi_termino, id_usuario) VALUES ('$status', '$nome','$descricao', '$inicio', '$termino', '$idUser')");

            if($sql_query) {

                echo "<script>alert('Atividade cadastrado com sucesso !');</script>"; 

                echo "<meta http-equiv='refresh' content='0, url=./agendar_atividades.php'>"; 

            } else {

                echo "<script>alert('Erro ao Cadastrar Atividade !');</script>";
                echo "<meta http-equiv='refresh' content='0, url=./agendar_atividades.php'>";
            }

        } else {

            echo "<script>alert('O Campo Status não pode ser: Selecione!');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./agendar_atividades.php'>";
        } 
    }

    #FUNÇÃO PARA PEGAR ID DA TABELA
	if (isset($_GET['alterarAtividade'])) {

		$idAtividade = @$_GET['idAtividade'];
		
		if ($idAtividade != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../visualizar_atividades.php?alterarAtividade=$idAtividade'>";

		}else{

			$idAtividade = 0;
		}

	}

    #FUNÇÃO PARA EXCLUIR ATIVIDADE
	if (isset($_GET['excluirAtividade'])) {

		$idAtividade = $_GET['idAtividade'];

		$sql_query_delete = $dbcon->query("DELETE FROM atividade WHERE id =".$idAtividade); 

		if($sql_query_delete) {

			echo "<script>alert('Atividade deletada com sucesso');</script>";
			echo "<meta http-equiv='refresh' content='0, url=../visualizar_atividades.php'>";

		} else {
			echo "<script>alert('Erro ao deletar Atividade');</script>";
		}

	}

    #FUNÇÃO PARA EDITAR ATIVIDADE

	if(@$_GET['go'] == 'editarAtividade'){

		$status = $_POST['status'];
		$nome = $_POST['nome'];
        $descricao = $_POST['descricao']; 
		$início = $_POST['início'];
		$termino = $_POST['termino'];
        $idUser = $_SESSION['idUser'];

		$idAtividade = $_POST['idAtividadeEdit'];

		$sql_query = $dbcon->query("UPDATE atividade SET ativi_status = '$status', ativi_nome = '$nome', ativi_descricao = '$descricao', ativi_inicio = '$início', ativi_termino = '$termino', id_usuario = '$idUser' WHERE id = '$idAtividade';");
        
		if($sql_query){
												
			echo "<script>alert('ATIVIDADE ALTERADA COM SUCESSO !');</script>";
			
			echo "<meta http-equiv='refresh' content='0, url=./visualizar_atividades.php'>";

		}else{

			echo "<script>alert('ERRO AO ATIVIDADE OPORTUNIDADE !');</script>";
		}

	}


?>