<?php 

    require_once 'conexao.php'; 

    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

    // seleciona todos os itens da tabela 

    $primeira_query = $dbcon->query("SELECT * FROM atividade"); 

    // conta o total de itens   
    $total = mysqli_num_rows($primeira_query); 

    // seta a quantidade de itens por página, neste caso, 5 itens 
    $registros = 5; 

    // calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    // Variavel para calcular o inicio da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 

    // seleciona os itens por página 
    $query_paginacao = $dbcon->query("SELECT * FROM atividade limit $inicio,$registros"); 

    $total = mysqli_num_rows($query_paginacao); 
   
    // exibe os produtos selecionados 
    while ($dados = $query_paginacao-> fetch_array()) {

        $tabIdAtividade = $dados['id'];
        $tabStatusAtividade = $dados['ativi_status']; 
        $tabNomeAtividade = $dados['ativi_nome']; 
        $tabDescricaoAtividade = $dados['ativi_descricao'];
        $tabInicioAtividade = $dados['ativi_inicio']; 
        $tabTerminoAtividade = $dados['ativi_termino'];
       

        echo "
        
        <tr> 
            <td>$tabIdAtividade</td>
            <td>$tabStatusAtividade</td>
            <td>$tabNomeAtividade</td>
            <td>$tabDescricaoAtividade</td>
            <td>$tabInicioAtividade</td>
            <td>$tabTerminoAtividade</td>

            <td class='acoes-tabela'>
                <a class='fa fa-pencil-square-o btn btn-primary' href='dao/gerenciar_atividade.php?alterarAtividade&idAtividade=$tabIdAtividade' title='EDITAR ATIVIDADE'></a>

                <a class='fa fa-trash btn btn-danger' href='dao/gerenciar_atividade.php?excluirAtividade&idAtividade=$tabIdAtividade' title='EXCLUIR ATIVIDADE'></a>                     
            </td>

        </tr>"; 

        
    }

    echo "
	<tfoot>
		<tr>
			<td colspan='5'>
				<a class='btn btn-success' href='visualizar_atividades.php?pagina=1'>Primeira</a> | ";

				if($pagina > 1) {
					echo "<a class='fa fa-angle-double-left btn btn-outline-danger' href='visualizar_atividades.php?pagina=".($pagina - 1)."'> Anterior</a> | ";
				}

				if($pagina < $numPaginas) {
					echo "<a class='fa fa-angle-double-right btn btn-outline-primary' href='visualizar_atividades.php?pagina=".($pagina + 1)."'> Próximo</a> | ";
				}

				echo "<a class='btn btn-danger' href='visualizar_atividades.php?pagina=$numPaginas'>Última</a>

			</td>
		</tr>	
	</tfoot>

	<p>Página $pagina de $numPaginas</p>";
      
?>