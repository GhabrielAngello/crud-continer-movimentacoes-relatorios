<h1>Movimentações agrupadas por cliente</h1>

<form class="d-flex" method="POST">
    <input class="form-control" type="search" placeholder="Digite aqui o nome do cliente"name="cliente">
    <button class="btn btn-primary" type="submit">Filtrar</button>
</form>
<br>
<?php
    $cliente = $_POST["cliente"] ?? "";
    $where = "WHERE cliente LIKE '%$cliente%'";

    $sql = "SELECT cliente, tipo_mov, COUNT(*) AS qtd_movimentacoes,
            (SELECT COUNT(*) FROM movimentacoes WHERE cliente = m.cliente) AS total_movimentacoes
            FROM movimentacoes m
            $where
            GROUP BY cliente, tipo_mov
            ORDER BY cliente ASC";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        echo "<table class='table table-striped'>";
        echo "<tr>";
        echo "<th>Cliente</th>";
        echo "<th>Tipo de Movimentação</th>";
        echo "<th>Quantidade</th>";
        echo "<th>Total de Movimentações</th>";
        echo "</tr>";
        while($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->cliente."</td>";
            echo "<td>".$row->tipo_mov."</td>";
            echo "<td>".$row->qtd_movimentacoes."</td>";
            echo "<td>".$row->total_movimentacoes."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não encontrou resultado!</p>";
    }
?>