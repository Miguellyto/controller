<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!--<meta charset="utf-8"> 
	<meta charset="iso-8859-1">-->
    <title>Vendedor Afiliado</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />

		<!--Redirecionamento-->
     <script>
        window.location.href = "index.html";
    </script>
		</head>
<body>
<?php
	$unidade = $_POST['unidade'];
	$assunto	= "Obrigado Sr(a) " .$_POST['nome']." por Fez o cadastro no programa: Vendedor Afiliado e escolhe o departamento de vendas: ".$_POST['unidade']." de nossa Loja!";
$corpo	= "Sou o(a) "  .$_POST['nome']." e fiz o cadastro para ser Vendedor Afiliado e escolhe o departamento de vendas: ".$_POST['unidade'].".
		
		Meu contato:

		Fone:	".$_POST['fone']."
		Email:	".$_POST['replyto']."
		
Att,

".$_POST['nome'].". 
		";

switch ($unidade){
	case 'Eletrodomesticos': 
	case 'Eletroportateis': 
	mail('cadastro@disciplinasead.com.br', $assunto, $corpo, 'From: inscricao@disciplinasead.com.br');
		break;

	case 'Informatica': 
	case 'Outro': 
	mail('cadastro@disciplinasead.com.br', $assunto, $corpo, 'From: inscricao@disciplinasead.com.br');
		break;

	//case 'unidadeOUdepartamento':
	//mail('cadastro@disciplinasead.com.br', $assunto, $corpo, 'From: inscricao@disciplinasead.com.br');
	//	break;

	//case 'unidadeOUdepartamento':
	//mail('cadastro@disciplinasead.com.br', $assunto, $corpo, 'From: inscricao@disciplinasead.com.br');
		}
	//mail('cadastro@disciplinasead.com.br', $assunto, $corpo, 'From: inscricao@disciplinasead.com.br');

	//echo 'Visita Agendada com sucesso. <br> Estamos te Esperando! <br>';
	//echo = '<meta http-equiv='Refresh' content='0;URL=index.php>';
?>
<!--
Cadastro Realizado com Sucesso. <br> <br>já Estamos analizando!
<p class="submit">
            <!--<a href="index.html">Voltar</a>-->
             <input type="button" onclick="window.location.href = 'index.php';" value="Voltar"/>
</p>


</body>
</html>
