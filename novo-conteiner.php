<h1>Novo Contêiner</h1>
<form action="?page=salvar" method="POST" >

	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Cliente:</label>
		<input type="text" name="cliente" placeholder="Digite aqui..." class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Número do contêiner:</label>
		<input type="text" name="numero_conteiner" pattern="[A-Z]{4}\d{7}" placeholder="4 letras e 7 números. Ex: TEST1234567" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Tipo:</label>
		<label for="20">
  			<input type="radio" name="tipo" value="20" class="form-check-input" required> 20 pés
		</label>
		<label for="40">
  			<input type="radio" name="tipo" value="40" class="form-check-input" required> 40 pés
		</label>
	</div>
	<div class="mb-3">
		<label>Status:</label>
		<label for="Cheio">
			<input type="radio" name="status" value="Cheio" class="form-check-input" required> Cheio
		</label>
		<label for="Vazio">
			<input type="radio" name="status" value="Vazio" class="form-check-input" required> Vazio
		</label>
	</div>
	<div class="mb-3">
		<label>Categoria:</label>
		<label for="Importacao">
			<input type="radio" name="categoria" value="Importação" class="form-check-input" required> Importação	
		</label>
		<label for="Exportacao">
			<input type="radio" name="categoria" value="Exportação" class="form-check-input" required> Exportação	
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>