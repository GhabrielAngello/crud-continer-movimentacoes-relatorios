<h1>Nova Movimentação</h1>

<?php 
	$sql = "SELECT id, cliente, numero_conteiner FROM conteiner WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-mov" method="POST" >
	<input type="hidden" name="acao" value="cadastrar-mov">
	<input type="hidden" name="id" value="<?php echo $row->id;?>">
	<div class="mb-3">
		<label>Cliente: </label>
		<input type="text" name="cliente" value="<?php echo $row->cliente; ?>" class="form-control" readonly>
	</div>
	<div class="mb-3">
	  <label>Númeração do Contêiner: </label>
	  <input type="text" name="numero_conteiner" value="<?php echo $row->numero_conteiner; ?>" class="form-control" readonly>
	</div>
	<div class="mb-3">
		<label>Tipo de Movimentação:</label>
		<label for="Embarque">
			<input type="radio" name="tipo_mov" value="Embarque" class="form-check-input" required> Embarque
		</label>
		<label for="Descarga">
			<input type="radio" name="tipo_mov" value="Descarga" class="form-check-input" required> Descarga
		</label>
		<label for="Get in">
			<input type="radio" name="tipo_mov" value="Get in" class="form-check-input" required> Get in
		</label>
		<label for="Get out">
			<input type="radio" name="tipo_mov" value="Get out" class="form-check-input" required> Get out
		</label>
		<label for="Reposicionamento">
			<input type="radio" name="tipo_mov" value="Reposicionamento" class="form-check-input" required> Reposicionamento
		</label>
		<label for="Pesagem">
			<input type="radio" name="tipo_mov" value="Pesagem" class="form-check-input" required>Pesagem
		</label>
		<label for="Scanner">
			<input type="radio" name="tipo_mov" value="Scanner" class="form-check-input" required>Scanner
		</label>
	</div>
	<div class="mb-3">
		<label>Data e Hora do Início:</label><br>
		<input type="datetime-local" name="data_inicio" required>
	</div>
	<div class="mb-3">
		<label>Data e Hora do Fim:</label><br>
		<input type="datetime-local" name="data_fim" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>