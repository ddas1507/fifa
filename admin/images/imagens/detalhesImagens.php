<?php
	$codigo	= $oquefazer->registros->IMG_CODIGO;
	$descricao	= $oquefazer->registros->IMG_DESCRICAO;
	$codimovel	= $oquefazer->registros->IMO_CODIGO;
	$dtcad	= $oquefazer->registros->IMG_DTCAD;
	$dtalt	= $oquefazer->registros->IMG_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Imagens</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarImagens&acao=listarImagens">Consultar Imagens Cadastradas</a></b></li>
					<li>></li>
					<li>Visualizar</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td >
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/imagens/<?php echo $descricao;?>" border="0" width="200px"/></td>
				</tr>
			</table>
		</td>
	</tr>
</table>