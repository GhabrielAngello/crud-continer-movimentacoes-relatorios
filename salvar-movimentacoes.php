<?php
	switch ($_REQUEST["acao"]) {
		case "cadastrar-mov":
			$cliente = $_POST["cliente"];
			$numero_conteiner = $_POST["numero_conteiner"];
			$tipo_mov = $_POST["tipo_mov"];
			$data_inicio = $_POST["data_inicio"];
			$data_fim = $_POST["data_fim"];
	

			$sql = "INSERT INTO movimentacoes (cliente, numero_conteiner, tipo_mov, data_inicio, data_fim) VALUES ('{$cliente}','{$numero_conteiner}', '{$tipo_mov}', '{$data_inicio}', '{$data_fim}')";

			$res = $conn->query($sql);
			
			if($res==true){
				echo "<script>alert('Movimentação cadastrada com sucesso!');</script>";
				echo "<script>location.href='?page=listar-mov';</script>";
			}else{
				echo "<script>alert('Não foi possível cadastrar!');</script>";
				echo "<script>location.href='?page=listar-mov';</script>";
			}
			break;

		case "editar-mov":
			$tipo_mov = $_POST["tipo_mov"];
			$data_inicio = $_POST["data_inicio"];
			$data_fim = $_POST["data_fim"];

			$sql = "UPDATE movimentacoes SET
						tipo_mov='{$tipo_mov}',
						data_inicio= '{$data_inicio}',
						data_fim= '{$data_fim}'
					WHERE
						id=".$_REQUEST["id"];


			$res = $conn->query($sql);
			
			if($res==true){
				echo "<script>alert('Movimentação editada com sucesso!');</script>";
				echo "<script>location.href='?page=listar-mov';</script>";
			}else{
				echo "<script>alert('Não foi possível editar!');</script>";
				echo "<script>location.href='?page=listar-mov';</script>";
			}
			break;

		case "excluir":
			
			$sql = "DELETE FROM movimentacoes WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);
			
			if($res==true){
				echo "<script>alert('Movimentação excluida com sucesso!');</script>";
				echo "<script>location.href='?page=listar-mov';</script>";
			}else{
				echo "<script>alert('Não foi possível excluir!');</script>";
				echo "<script>location.href='?page=listar-mov';</script>";
			}

			break;
	}