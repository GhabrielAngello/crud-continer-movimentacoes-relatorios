<h1>Editar Movimentação</h1>
<?php
	$sql = "SELECT * FROM movimentacoes WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-mov" method="POST" >
	<input type="hidden" name="acao" value="editar-mov">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	<div class="mb-3">
		<label>Cliente:</label>
		<input type="text" name="cliente" value="<?php echo $row->cliente; ?>" class="form-control" disabled>
	</div>
	<div class="mb-3">
		<label>Número do contêiner</label>
		<input type="text" name="numero_conteiner" value="<?php echo $row->numero_conteiner; ?>" class="form-control" disabled>
	</div>
	<div class="mb-3">
		<label>Tipo de Movimentação:</label>
		<label for="Embarque">
			<input type="radio" name="tipo_mov" value="Embarque" class="form-check-input" required <?php if($row->tipo_mov == "Embarque") echo 'checked';?>> Embarque
		</label>
		<label for="Descarga">
			<input type="radio" name="tipo_mov" value="Descarga" class="form-check-input" required <?php if($row->tipo_mov == "Descarga") echo 'checked';?>> Descarga
		</label>
		<label for="Get in">
			<input type="radio" name="tipo_mov" value="Get in" class="form-check-input" required <?php if($row->tipo_mov == "Get in") echo 'checked';?>> Get in
		</label>
		<label for="Get out">
			<input type="radio" name="tipo_mov" value="Get out" class="form-check-input" required <?php if($row->tipo_mov == "Get out") echo 'checked';?>> Get out
		</label>
		<label for="Reposicionamento">
			<input type="radio" name="tipo_mov" value="Reposicionamento" class="form-check-input" required <?php if($row->tipo_mov == "Reposicionamento") echo 'checked';?>> Reposicionamento
		</label>
		<label for="Pesagem">
			<input type="radio" name="tipo_mov" value="Pesagem" class="form-check-input" required <?php if($row->tipo_mov == "Pesagem") echo 'checked';?>>Pesagem
		</label>
		<label for="Scanner">
			<input type="radio" name="tipo_mov" value="Scanner" class="form-check-input" required <?php if($row->tipo_mov == "Scanner") echo 'checked';?>>Scanner
		</label>
	</div>

	<div class="mb-3">
		<label>Data e Hora do Início:</label><br>
		<input type="datetime-local" name="data_inicio" required value="<?php echo $row->data_inicio?>">
	</div>

	<div class="mb-3">
		<label>Data e Hora do Fim:</label><br>
		<input type="datetime-local" name="data_fim" required value="<?php echo $row->data_fim?>">
	</div>
	
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>