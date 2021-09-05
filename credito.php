<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Hardware & Software</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/Inicial.png" alt="topo">		
	</div>
	<br><br><br>
	<h1>Mundo de Hardware & Software</h1><hr><br>
	<div class="pesquisa">
		<h5>Técnico: Carlos E. Silva</h5>		
	</div>
	<div class="conteudo">
		<?php
			$nome = $_POST["nome"];
			$renda =$_POST["renda"];
			echo "Olá $nome Obrigado por seu contato.<br>";
			if ($renda>=500) {
				echo "Parabéns seu credito está <strong> aprovado </strong> ! ";
			} elseif ($renda<500) {
				echo "Infelizmente neste momento não poderemos conceder 
	            	credito, <strong> clique </strong> em voltar para acessar a pagina";
			}
		?>
		<br><br>
		<a href="index.html"> << Voltar para pagina principal</a>
	</div>
	<div class="rodape">
		<h2>Conteudos sobre Hardware e Software !!!</h2><br>
	</div>
	<footer>
		<h6>Todos os direitos e reservados - Técnico Carlos E. Silva</h6>
	</footer>
</body>
</html>