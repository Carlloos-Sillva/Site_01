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
	<br><br><br><br>
	<h1>Orçamento - Mundo de Hardware & Software</h1><hr><br>
	<div class="conteudo">
		<?php
			$data = $_POST["data"];
			$garantia = $_POST["garantia"];
			$servico = $_POST["servico"];
			$aparelho = $_POST["aparelho"];
			$cliente = $_POST["cliente"];
			echo "<strong>Detalhes do orçamento:</strong><br>"; 
			echo "Data $data tempo de garantia: $garantia meses<br>";
			echo "Aparelho para manutenção: $aparelho <br>";
			echo "Serviço a ser executado: $servico <br>";
			switch ($servico) {
				case 'Formatação':
					echo "O valor total será de R$ 100,00 junto com mão de obra ";
					break;
				case 'Troca de Peças e Reparo':
					echo "O valor total será de R$ 70,00 mais o valor das peças ou reparo feito junto com mão de obra ";
					break;
				case 'Outros':
					echo " Valor em avaliação no momento do atendimento no local";
					break;
				
				default:
					echo "<strong>Infelizmente não e possivel este serviço no momento !</strong>";
					break;
			}
				echo "<br><br><strong>Declaro estar de acordo os valores e informaçoes acima descritos <br> $cliente.</strong>";
		?>
		<br>
		<p>Assinatura_____________________________________________________</p><br>
		<p>Data:___/___/___</p>
		<p>Ao assinar concorda com todos termos de serviços e garantia</p>
		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()">
		</form>
		<a href="index.html"> << Voltar </a>
	</div>
	<div class="rodape">
		<h2>Conteudos sobre Hardware e Software</h2><br>
	</div>
	<footer>
		<h6>Todos os direitos e reservados - Técnico Carlos E. Silva</h6>
	</footer>
</body>
</html>