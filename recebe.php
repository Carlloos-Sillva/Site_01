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
			$pesquisa = $_GET['pesquisa'];
			switch ($pesquisa) {
				case 'office':
				echo "
				<h2>Pacote Office</h2>
				<img src='img/Office.png'><br>
				Faculdade, cursos livres e técnicos Mercado de trabalho disputado, empresas cada vez mais exigentes...<br>
				Tempo e Dinheiro, são fatores que ocupam e preocupam pessoas o tempo todo na atual sociedade.<p> Microsoft Office, apresenta a forma mais simples e rápida de aprender as principais ferramentas da Microsoft para a criação de Planilhas eletrônicas, Formatação de Textos e Criação de Apresentações <br> com os já conhecidos e amplamente utilizados Softwares Excel, Word e Power Point.";
				break;
				case 'marketing':
				echo "
				<h2>Marketing Digital</h2>
				<img src='img/Ads.png'><br>
				Uma das maiores dificuldades no início de qualquer empreendimento é a conquista dos clientes, mostrar o quanto sua ideiapode ser inovadora ou o quanto seu produto pode ser útil e sua qualidade surpreendente.<p>
				Se você é um produtor de conteúdo digital (Youtuber por exemplo) este curso vai ajudar a alavancar seus vídeos e conquistar público. 
				Neste curso trabalhamos com o Marketing Direto, no qual os anúncios serão totalmente objetivos levando clientes (que estajam buscando por seu produto) até a sua página de vendas, canal, loja virtual ou física e página do Facebook.";
				break;
				case 'negocios':
				echo "
				<h2>Negócios Digitais</h2>
				<img src='img/Negocios.png'><br>
				Já imaginou desenvolver um site e obter renda extra com isso?<br>
				Já imaginou trabalhar como afiliado de produtos digitais, gerando renda sem ter que abandonar seu atual emprego ou atividade?<p>
				Prestar serviços de desenvolvimento de sites para empreendedores digitais, com campanhas completas de Marketing digital utilizando Google Ads, Facebook Ads?<p>
				Tornar - se um afiliado Profissional de plataformas conhecidas como Hotmart, Eduzz, Monetizze e Udemy?<p>
				Alavancar a venda de produtos físicos melhorando sua presença digital?
				Se você disse sim para uma (ou todas) essas perguntas, então este curso é ideal!";
				break;			
				default:
				echo "Informações não encontrada, clique em voltar e tente novamente !!!";
				break;
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