<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar Filial</title>		
	</head>
	<body>
		
		<a href="cad_filial.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Cadastrar Filial</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_filial.php">
			
			<label>Cod: </label>
			<input type="text" name="cod" placeholder="Código da Filial"><br><br>			

			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Nome"><br><br>
			
			<label>Endereço: </label>
			<input type="text" name="end" placeholder="Endereço"><br><br>
			
			<label>Bairro: </label>
			<input type="text" name="bairro" placeholder="Bairro"><br><br>
			
			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="Cidade"><br><br>
			
			<label>CEP: </label>
			<input type="text" name="cep" placeholder="CEP"><br><br>
			
			<label>UF: </label>
			<input type="text" name="uf" placeholder="UF"><br><br>
			
			<label>Celular: </label>
			<input type="text" name="celular" placeholder="Celular"><br><br>
			
			<label>Fone Gerência: </label>
			<input type="text" name="fone" placeholder="Fone Gerência"><br><br>
			
			<label>Status: </label>
			<input type="text" name="status" placeholder="statusfilial"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>