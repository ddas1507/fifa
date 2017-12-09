<? $codigo = $_REQUEST['imocod']; ?>
<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
		  <div id="navegacao-header">
			<ul>
				<li><b><a href="index.php?tabela=detalhesImoveis&acao=detalhesImoveis&codigo=<? echo $codigo?>">Consultar Imovel Cadastrados</a></b></li>
				<li>></li>
				<li>Imagens do imovel</li>
			</ul>
		  </div>
		</td>
	</tr>
</table>
<table class="tabelas-consulta">
	<tr>
		<td class="dados-tabelas">
			<a href="index.php?tabela=formularioCadastrarImagens&acao=formularioCadastrarImagens&imocod=<? echo $codigo;?>">
				<img src="images/others/view.png" border="0" width="24px"> Inserir Nova Foto
			</a>
		</td>
	</tr>
</table>
<table border="1" width="100%">
	<tr>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$imgcod	= $oquefazer->registros->IMG_CODIGO;
					$imocod	= $oquefazer->registros->IMO_CODIGO;
					$imovel	= $oquefazer->registros->IMO_NOME;
					$descricao	= $oquefazer->registros->IMG_DESCRICAO;
					$dtcad	= $oquefazer->registros->IMG_DTCAD;
			?>
		<td>
			<table>
				<tr><td align="right" valign="top"><a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $descricao;?>')) {location='index.php?tabela=excluirImagens&acao=excluirImagens&codigo=<? echo $imgcod;?>&imocod=<? echo $imocod;?>';}"><img src="images/others/delete.png" border="0" width="24px"></a></td></tr>
				<tr><td><img src="images/imagens/<?php echo $descricao;?>" width="100px"><br /></td></tr>
			</table>
		</td>				
			<?php
			} ?>

	</tr>
</table>