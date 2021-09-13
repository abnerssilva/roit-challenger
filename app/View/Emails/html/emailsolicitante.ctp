<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>E-mail Eventos</title>

<style>
	html, body{
		margin: 0;
		padding: 0;

	}
	.container{
		position: relative;
		width: 700px;
		margin: 0 auto;
		font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
	.decora{
		width: 100%;
		height: 25px;
		display: block;
		background-color: #299031;
	}
	.img-topo{
		margin: 10px 0;
	}
	.spacer{
		width: 100%;
		height: 1px;
		margin: 5px auto;
	}
	.logopib{
		width: 234px;
		height: 50px;
		position: relative;
		display: inline;
		margin: 0 auto!important;
	}
</style>
</head>

<body>

<div class="container">
	<div class="decora"></div>
	<img src="https://www.pibcuritiba.org.br/wp-content/uploads/2017/03/logopib.png" class="img-topo" alt="PIB" style="
    float: right;
">
	<h1> Olá, <?php echo $nomeUsuario; ?></h1>
	<p> Sua solicitação de evento foi cadastrada com sucesso. Segue dados da solicitação abaixo:  </p><br><br>
	<p> ID do Evento: <?php echo $idEvento; ?></p>
	<p> Data: <?php echo $dataInicio; ?></p>
	<p> Acompanhe as etapas até a aprovação <a href="<?php echo $this->Html->url(array('controller'=>'eventos', 'action'=>'responsaveis', $hash)); ?>">Clicando aqui</a></p>
	<p><strong>Este é um email automático, favor não responder.</strong></p>
	<div class="spacer"></div>
	<div class="decora"></div>
</div>
</body>
</html>