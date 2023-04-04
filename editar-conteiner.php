<h1>Editar Contêiner</h1>
<?php
	$sql = "SELECT * FROM conteiner WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST" >
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	<div class="mb-3">
		<label>Cliente:</label>
		<input type="text" name="cliente" value="<?php echo $row->cliente; ?>" class="form-control" readonly>
	</div>
	<div class="mb-3">
		<label>Número do contêiner:</label>
		<input type="text" name="numero_conteiner" pattern="[A-Z]{4}\d{7}" value="<?php echo $row->numero_conteiner; ?>" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Tipo:</label>
		<label for="20">
  			<input type="radio" name="tipo" value="20" class="form-check-input" required <?php if($row->tipo == "20") echo 'checked';?>> 20 pés
		</label>
		<label for="40">
  			<input type="radio" name="tipo" value="40" class="form-check-input" required <?php if($row->tipo == "40") echo 'checked';?>> 40 pés
		</label>
	</div>
	<div class="mb-3">
		<label>Status:</label>
		<label for="Cheio">
			<input type="radio" name="status" value="Cheio" class="form-check-input" required <?php if($row->status == "Cheio") echo 'checked';?>> Cheio
		</label>
		<label for="Vazio">
			<input type="radio" name="status" value="Vazio" class="form-check-input" required <?php if($row->status == "Vazio") echo 'checked';?>> Vazio
		</label>
	</div>
	<div class="mb-3">
		<label>Categoria:</label>
		<label for="Importacao">
			<input type="radio" name="categoria" value="Importação" class="form-check-input" required <?php if($row->categoria == "Importação") echo 'checked';?>> Importação	
		</label>
		<label for="Exportacao">
			<input type="radio" name="categoria" value="Exportação" class="form-check-input" required <?php if($row->categoria == "Exportação") echo 'checked';?>> Exportação	
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>