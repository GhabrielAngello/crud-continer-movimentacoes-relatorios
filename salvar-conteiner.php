<?php
	switch ($_REQUEST["acao"]) {
		case "cadastrar":
			$cliente = $_POST["cliente"];
			$numero_conteiner = $_POST["numero_conteiner"];
			$tipo = $_POST["tipo"];
			$status = $_POST["status"];
			$categoria = $_POST["categoria"];

			$sql = "INSERT INTO conteiner (cliente, numero_conteiner, tipo, status, categoria) VALUES ('{$cliente}', '{$numero_conteiner}', '{$tipo}', '{$status}', '{$categoria}')";

			$res = $conn->query($sql);
			
			if($res==true){
				echo "<script>alert('Contêiner cadastrado com sucesso!');</script>";
				echo "<script>location.href='?page=listar';</script>";
			}else{
				echo "<script>alert('Não foi possível cadastrar!');</script>";
				echo "<script>location.href='?page=listar';</script>";
			}
			break;

		case "editar":
			$cliente = $_POST["cliente"];
			$numero_conteiner = $_POST["numero_conteiner"];
			$tipo = $_POST["tipo"];
			$status = $_POST["status"];
			$categoria = $_POST["categoria"];

			$sql = "UPDATE conteiner SET
						cliente='{$cliente}',
						numero_conteiner= '{$numero_conteiner}',
						tipo= '{$tipo}',
						status='{$status}',
						categoria='{$categoria}'
					WHERE
						id=".$_REQUEST["id"];


			$res = $conn->query($sql);
			
			if($res==true){
				echo "<script>alert('Contêiner editado com sucesso!');</script>";
				echo "<script>location.href='?page=listar';</script>";
			}else{
				echo "<script>alert('Não foi possível editar!');</script>";
				echo "<script>location.href='?page=listar';</script>";
			}
			break;

		case "excluir":
			
			$sql = "DELETE FROM conteiner WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);
			
			if($res==true){
				echo "<script>alert('Contêiner excluido com sucesso!');</script>";
				echo "<script>location.href='?page=listar';</script>";
			}else{
				echo "<script>alert('Não foi possível excluir!');</script>";
				echo "<script>location.href='?page=listar';</script>";
			}

			break;
	}