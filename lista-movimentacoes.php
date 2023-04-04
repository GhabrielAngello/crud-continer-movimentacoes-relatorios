<h1>Movimentações</h1>

<form class="d-flex" method="POST">
	<input class="form-control" type="search" placeholder="Digite aqui o número do contêiner..."name="numero_conteiner">
	<button class="btn btn-primary" type="submit">Filtrar</button>
</form>
<br>
<?php
	$numero_conteiner = $_POST["numero_conteiner"] ?? "";
    $where = "WHERE numero_conteiner LIKE '%$numero_conteiner%'";
	
	$sql = "SELECT * FROM movimentacoes $where ORDER BY numero_conteiner ASC";
	

	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		echo "<table class='table table-striped'>";
			echo "<tr>";
			echo "<th>Cliente</th>";
			echo "<th>Númeração do contêiner</th>";
			echo "<th>Tipo de Movimentação</th>";
			echo "<th>Data e Hora do Início</th>";
			echo "<th>Data e Hora do Fim</th>";
			echo "<th>Alterar / Excluir</th>";
			echo "</tr>";
		while($row = $res->fetch_object()) {
			echo "<tr>";
			echo "<td>".$row->cliente."</td>";
			echo "<td>".$row->numero_conteiner."</td>";
			echo "<td>".$row->tipo_mov."</td>";
			echo "<td>".$row->data_inicio."</td>";
			echo "<td>".$row->data_fim."</td>";
			echo "<td>
					<button onClick=\"location.href='?page=editar-mov&id=".$row->id."';\" class='btn btn-success'>Alterar</button>

					<button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-mov&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
					</td>";
			echo "</tr>";		
		}
		echo "</table>";	
	}else{
		echo "<p class='alert alert-danger'>Não encontrou resultado!</p>";
	}
?>