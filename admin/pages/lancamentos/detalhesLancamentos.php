<?php
	$lanccod	= $oquefazer->registros->LANC_CODIGO;
	$lancnome	= $oquefazer->registros->LANC_NOME;
	$lancvalor	= $oquefazer->registros->LANC_VALOR;
	$img	= $oquefazer->registros->LANC_IMG;
	$dtcad	= $oquefazer->registros->LANC_DTCAD;
	$dtalt	= $oquefazer->registros->LANC_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Lancamentos</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarLancamentos&acao=listarLancamentos">Consultar Lancamentos</a></b></li>
					<li>></li>
					<li>Perfil de <?php echo $lancnome;?></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $lanccod;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $lancnome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Valor:</td><td class="tabela-dados-visualizar"><? echo 'R$ '.$lancvalor;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($lanccod == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Opc&otilde;es</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarLancamentos&acao=formularioAlterarLancamentos&lanccod=<? echo $lanccod;?>">
							Editar Cadastro
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o lancamento?\n\nDescricao: <?php echo $lancnome;?>')) {location='index.php?tabela=excluirLancamentos&acao=excluirLancamentos&lanccod=<? echo $lanccod;?>';}">
							Excluir Debito
						</a>
					</td>
				</tr>
				<?
				}
				else{
				
				}
				?>
			</table>
		</td>				
	</tr>
</table>