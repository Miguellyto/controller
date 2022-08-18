<?php
session_start();
include_once("conexao.php");
$cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);
$result_filial = "SELECT * FROM filial WHERE cod = '$cod'";
$resultado_filial = mysqli_query($conn, $result_filial);
$row_filial = mysqli_fetch_assoc($resultado_filial);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Filial</title>		
	</head>
	<body>
		<a href="cad_filial.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Editar Filial</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_filial.php">
								cell		statusfilial	

			<label>Cod: </label>
			<input type="text" name="cod" placeholder="Código da Filial" value="<?php echo $row_usuario['cod']; ?>"><br><br>			

			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>Endereço: </label>
			<input type="text" name="end" placeholder="Endereço" value="<?php echo $row_usuario['endereco']; ?>"><br><br>
			
			<label>Bairro: </label>
			<input type="text" name="bairro" placeholder="Bairro" value="<?php echo $row_usuario['bairro']; ?>"><br><br>
			
			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="Cidade" value="<?php echo $row_usuario['cidade']; ?>"><br><br>
			
			<label>CEP: </label>
			<input type="text" name="cep" placeholder="CEP" value="<?php echo $row_usuario['cep']; ?>"><br><br>
			
			<label>UF: </label>
			<input type="text" name="uf" placeholder="UF" value="<?php echo $row_usuario['uf']; ?>"><br><br>
			
			<label>Celular: </label>
			<input type="text" name="celular" placeholder="Celular" value="<?php echo $row_usuario['cell']; ?>"><br><br>
			
			<label>Fone Gerência: </label>
			<input type="text" name="fone" placeholder="Fone Gerência" value="<?php echo $row_usuario['fonegerancia']; ?>"><br><br>

			<label>Fone Gerência: </label>
			<input type="text" name="status" placeholder="Status" value="<?php echo $row_usuario['statusfilial']; ?>"><br><br>

			<input type="submit" value="Editar">
		</form>
	</body>
</html>