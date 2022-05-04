
<?php require_once "dao/gerenciar_atividade.php"; ?> 

<?php 

  $idAtividadeEdit = @$_GET['alterarAtividade'];

  if ($idAtividadeEdit != 0) {

    $res = $dbcon->query("SELECT * FROM atividade WHERE id = ".$idAtividadeEdit); 

    while($dados = $res->fetch_array()){

      $statusAtividadeEdit = $dados['ativi_status'];
      $nomeAtividadeEdit = $dados['ativi_nome'];
      $descricaoAtividadeEdit = $dados['ativi_descricao'];
      $inicioAtividadeEdit = $dados['ativi_inicio'];
      $terminoAtividadeEdit = $dados['ativi_termino'];

    }

  } else {

    $idAtividadeEdit = 0;

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização das Atividades</title>

    <link rel="stylesheet" href="css/visualizar_atividades.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_menu.css">
    <link rel="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    
    <div class="navbar navbar-inverse navbar-fixed-left">
        <a class="navbar-brand" href="menu_agt.php">Menu</a>

        <ul class="nav navbar-nav">
            <li><a href="agendar_atividades.php">Agendar Atividades</a>
            <li><a href="visualizar_atividades.php">Visualizar Atividades</a>
            <li><a href="login_usuario.php">Sair</a>
        </ul>

    </div>

    <div class="container"> 

        <div class="row">
            <br><br><br>

            <table id="tabelaAtividades" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> 

                <thead>

                    <tr class="titulo_tabela">

                        <th>Id</th>
                        <th>Status</th> 
                        <th>Nome</th> 
                        <th>Descrição</th> 
                        <th>Início</th> 
                        <th>Termino</th> 
                        <th>Ações</th>

                    </tr>

                </thead>

            <tbody>

                <?php include_once "dao/tabela_atividades.php"; ?>

            </tbody>

        </table>

        <br><br><br>

        <?php 

            if ($idAtividadeEdit != 0){

                 include_once "editar_form_atividades.php";

            }
        ?>

        </div> 

    </div>

</body>
</html>