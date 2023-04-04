<h1>Contêiners</h1>

<form class="d-flex" method="POST">
	<input class="form-control" type="search" placeholder="Digite aqui o número do contêiner..." name="numero_conteiner">
	<button class="btn btn-primary" type="submit">Filtrar</button>
</form>
<br>
<?php
	$numero_conteiner = $_POST["numero_conteiner"] ?? "";
    $where = "WHERE numero_conteiner LIKE '%$numero_conteiner%'";
	
	$sql = "SELECT * FROM conteiner $where ORDER BY numero_conteiner ASC";
	
	
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		echo "<table class='table table-striped'>";
			echo "<tr>";
			echo "<th>Cliente</th>";
			echo "<th>Númeração do contêiner</th>";
			echo "<th>Tipo</th>";
			echo "<th>Status</th>";
			echo "<th>Categoria</th>";
			echo "<th>Alterar / Excluir / Movimentação<th>";
			echo "</tr>";
		while($row = $res->fetch_object()){
			echo "<tr>";
			echo "<td>".$row->cliente."</td>";
			echo "<td>".$row->numero_conteiner."</td>";
			echo "<td>".$row->tipo."</td>";
			echo "<td>".$row->status."</td>";
			echo "<td>".$row->categoria."</td>";
			echo "<td> 
					<button onClick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Alterar</button>

					<button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>

					<button onClick=\"location.href='?page=novo-mov&id=".$row->id."';\" class='btn btn-primary'>Adicionar Movimentação</button>
					</td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "<p class='alert alert-danger'>Não encontrou resultado!</p>";
	}
?>