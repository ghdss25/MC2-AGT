<form method="post" action="?go=editarAtividade" class="form-horizontal">
	<fieldset>
		<div id="legend">
			<legend class="">Alterar Atividade</legend>
		</div>

        <input type="hidden" name="idAtividadeEdit" value="<?php echo $idAtividadeEdit; ?>">  

		<div class="control-group">
			<label class="control-label" for="status">Tipo</label>
			<div class="controls">

				<select id="status" name="status" required="true" class="input-xlarge form-control">
					<option selected value="Selecione">Selecione</option>
					
					<!-- OPTION PARA Projeto -->
					<?php echo "<option value='Pendente'"; ?> 
						<?=($statusAtividadeEdit == 'Pendente')?'selected':'' ?> 
					<?php echo " >Pendente</option>"; ?>					
					
					<!-- OPTION PARA Pre-Projeto -->
					<?php echo "<option value='Concluída'"; ?> 
						<?=($statusAtividadeEdit == 'Concluída')?'selected':'' ?> 
					<?php echo " >Concluída</option>"; ?>		

					<!-- OPTION PARA Lista de Exercicio -->
					<?php echo "<option value='Cancelada'"; ?> 
						<?=($tipoAtividadeEdit == 'Cancelada')?'selected':'' ?> 
					<?php echo " >Cancelada</option>"; ?>	
		
				</select>

				<p class="help-block">Defina o status para Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="nome">Nome</label>
			<div class="controls">
				<textarea type="text" id="nome" name="nome" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"><?php echo $nomeAtividadeEdit; ?></textarea>
				<p class="help-block">Nome sobre Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="descricao">Descrição</label>
			<div class="controls">
				<input type="text" id="descricao" name="descricao" required="true" value="<?php echo $descricaoAtividadeEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Descrição da Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="início">Início</label>
			<div class="controls">
				<input type="text" id="início" name="início" required="true" value="<?php echo $inicioAtividadeEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Data de Início da Atividade</p>
			</div>
		</div>

        <div class="control-group">
			<label class="control-label" for="termino ">Termino</label>
			<div class="controls">
				<input type="text" id="termino" name="termino" required="true" value="<?php echo $terminoAtividadeEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Data de Termino da Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button type="submit" class="btn btn-success">Editar</button>
			</div>
		</div>
	</fieldset>
</form>
