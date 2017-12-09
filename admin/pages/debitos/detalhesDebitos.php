<?php
	$debtcod	= $oquefazer->registros->DEBT_CODIGO;
	$debtnome	= $oquefazer->registros->DEBT_NOME;
	$debtvalor	= $oquefazer->registros->DEBT_VALOR;
	$img	= $oquefazer->registros->DEBT_IMG;
	$dtcad	= $oquefazer->registros->DEBT_DTCAD;
	$dtalt	= $oquefazer->registros->DEBT_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Debitos</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarDebitos&acao=listarDebitos">Consultar Debitos</a></b></li>
					<li>></li>
					<li>Perfil de <?php echo $debtnome;?></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/debitos/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
				<!--tr>
					<td align="center">
						<a href="index.php?tabela=formularioAlterarFotoDebitos&acao=formularioAlterarFotoDebitos&debtcod=<? //echo $debtcod;?>">Alterar Foto</a>
					</td>
				</tr-->
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $debtcod;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $debtnome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Valor:</td><td class="tabela-dados-visualizar"><? echo 'R$ '.$debtvalor;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($debtcod == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Opc&otilde;es</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarFotoDebitos&acao=formularioAlterarFotoDebitos&debtcod=<? echo $debtcod;?>">Alterar Foto</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarDebitos&acao=formularioAlterarDebitos&debtcod=<? echo $debtcod;?>">
							Editar Cadastro
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o debito?\n\nDescricao: <?php echo $debtnome;?>')) {location='index.php?tabela=excluirDebitos&acao=excluirDebitos&debtcod=<? echo $debtcod;?>';}">
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