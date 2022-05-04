
<?php require_once "dao/gerenciar_atividade.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Atividades</title>

    <link rel="stylesheet" href="css/agendar_atividades.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_menu.css">
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
            <form method="POST" action="?go=agendarAtividade" class="form-horizontal"> 

                <fieldset> 

                    <div id="">
                        <legend class="legend">Agendamento de Atividades</legend>
                    </div>

                    <div class="control-group"> 

                        <label class="control-label" for="status">Status</label> 

                        <div class="controls">

                            <select id="status" name="status" required="true" class="input-xlarge form-control">
                                <option selected value="Selecione">Selecione</option> 
                                <option value="Pendente">Pendente</option> 
                                <option value="Concluída">Concluída</option> 
                                <option value="Cancelada">Cancelada</option>
                            </select>
                        </div>

                    </div>

                    <div class="control-group"> 

                        <label class="control-label" for="username">Nome</label> 

                        <div class="controls"> 

                            <input type="text" id="username" name="nome" maxlength="60" required="true" class="input-xlarge form-control"> 
                            <p class="help-block">Nome da Atividade</p>

                        </div>

                    </div>

                     <div class="control-group"> 

                        <label class="control-label" for="descricao">Descrição</label> 

                        <div class="controls"> 

                            <input type="text" id="descricao" name="descricao" maxlength="60" required="true" class="input-xlarge form-control"> 
                            <p class="help-block">Descrição sobre Atividade</p>

                        </div>

                    </div>

                    <div class="control-group"> 

                        <label class="control-label" for="inicio">Início</label> 

                        <div class="controls"> 

                            <input type="text" id="inicio" name="inicio" maxlength="60" required="true" class="input-xlarge form-control"> 
                            <p class="help-block">Data de início da Atividade</p>

                        </div>

                    </div>

                    <div class="control-group"> 

                        <label class="control-label" for="termino">Término </label> 

                        <div class="controls"> 

                            <input type="text" id="termino" name="termino" maxlength="60" required="true" class="input-xlarge form-control"> 
                            <p class="help-block">Data do Término da Atividade</p>

                        </div>

                    </div>

                    <div class="control-group"> 

                        <div class="controls"> 
                            <button type="submit" class="btn btn-sucess">Agendar Atividade</button>
                        </div>
                        
                    </div>

                </fieldset>

            </form>

        </div>
        
    </div>

</body>

</html>