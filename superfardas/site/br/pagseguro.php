<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
	body{
		background-color: #1165D8;
	}
	h2{
		text-align: center;
		font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
		color: #fff;
		padding: 20px;
	}
	.conteiner{
		border-radius: 10px;
		border: solid 2px #FFFFFF;
		width: 680px;
		height: 460px;
		margin: auto;
		margin-top: 14%;
	}
	.botao{
		background-color: #fff;
		border-radius: 10px;
		width: 200px;
		margin: auto;
		padding: 30px;
		margin-top: 15%;
	}	
</style>
<title>Desenvolvimento de Website Institucional Superfardas</title>
</head>

<body>
	<div class="conteiner">
		<h2>Desenvolvimento de Website Institucional Superfardas</h2>	
		<div class="botao">
			<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
			<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
				<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
				<input type="hidden" name="code" value="29258B87A9A912E1147F5FB391478A5A" />
				<input type="hidden" name="iot" value="button" />
				<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
			</form>
		</div>
		<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
		<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
	</div>
</body>
</html>
