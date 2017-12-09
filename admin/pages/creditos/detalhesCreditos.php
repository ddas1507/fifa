<?php
	$credcod	= $oquefazer->registros->CRED_CODIGO;
	$crednome	= $oquefazer->registros->CRED_NOME;
	$credvalor	= $oquefazer->registros->CRED_VALOR;
	$img	= $oquefazer->registros->CRED_IMG;
	$dtcad	= $oquefazer->registros->CRED_DTCAD;
	$dtalt	= $oquefazer->registros->CRED_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Creditos</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarCreditos&acao=listarCreditos">Consultar Creditos</a></b></li>
					<li>></li>
					<li>Perfil de <?php echo $crednome;?></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $credcod;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $crednome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Valor:</td><td class="tabela-dados-visualizar"><? echo 'R$ '.$credvalor;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($credcod == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Opc&otilde;es</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarCreditos&acao=formularioAlterarCreditos&credcod=<? echo $credcod;?>">
							Editar Cadastro
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o credito?\n\nDescricao: <?php echo $crednome;?>')) {location='index.php?tabela=excluirCreditos&acao=excluirCreditos&credcod=<? echo $credcod;?>';}">
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