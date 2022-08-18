<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Listar Filial</title>		
	</head>
	<body>
		<a href="cad_filial.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<!-- <a href="pesquisar.php">Pesquisar</a><br> -->
		<h1>Listar Filial</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_filial = "SELECT * FROM filial LIMIT $inicio, $qnt_result_pg";
		$resultado_filial = mysqli_query($conn, $result_filial);
		while($row_filial = mysqli_fetch_assoc($resultado_filial)){
			echo "Código: " . $row_filial['cod'] . "<br>";
			echo "Nome: " . $row_filial['nome'] . "<br>";
			echo "Endereço: " . $row_filial['endereco'] . "<br>";
			echo "Bairro: " . $row_filial['bairro'] . "<br>";
			echo "Cidade: " . $row_filial['cidade'] . "<br>";
			echo "CEP: " . $row_filial['cep'] . "<br>";
			echo "UF: " . $row_filial['uf'] . "<br>";
			echo "Celular: " . $row_filial['cell'] . "<br>";
			echo "Fone Gerência: " . $row_filial['fonegerancia'] . "<br>";
			echo "Status: " . $row_filial['statusfilial'] . "<br>";
			echo "<a href='edit_filial.php?cod=" . $row_filial['cod'] . "'>Editar</a><br>";
			echo "<a href='proc_apagar_filial.php?cod=" . $row_filial['cod'] . "'>Apagar</a><br><hr>";
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(cod) AS num_result FROM filial";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>