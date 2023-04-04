<h1>Total de importações e exportações</h1>
<?php
	$sql = "SELECT cliente, 
            COUNT(categoria = 'Importação' OR NULL) AS total_importacao, 
            COUNT(categoria = 'Exportação' OR NULL) AS total_exportacao 
		      FROM conteiner
		      GROUP BY cliente;";

	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
        echo "<table class='table table-striped'>";
        echo "<tr>";
        echo "<th>Cliente</th>";
        echo "<th>Total de Importação</th>";
        echo "<th>Total de Exportação</th>";
        echo "</tr>";
        while($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->cliente."</td>";
            echo "<td>".$row->total_importacao."</td>";
            echo "<td>".$row->total_exportacao."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não encontrou resultado!</p>";
    }
?>