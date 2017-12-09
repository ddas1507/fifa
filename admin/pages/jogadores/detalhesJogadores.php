<?php
	$jogadcod	= $oquefazer->registros->JOGADOR_CODIGO;
	$nome	= $oquefazer->registros->JOGADOR_NOME;
	$img	= $oquefazer->registros->JOGADOR_IMG;	
	$dtcad	= $oquefazer->registros->JOGADOR_DTCAD;
	$dtalt	= $oquefazer->registros->JOGADOR_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Jogadores</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarjogadores&acao=listarJogadores">Consultar Jogadores</a></b></li>
					<li>></li>
					<li>Perfil de <?php echo $nome;?></li>
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
					<td align="center"><img src="images/jogadores/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
				</tr>
					<td align="center">
						<a href="index.php?tabela=formularioAlterarFotoJogadores&acao=formularioAlterarFotoJogadores&jogadcod=<? echo $jogadcod;?>">Alterar Foto</a>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $jogadcod;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $nome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($jogadcod == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Opc&otilde;es</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarFotoJogadores&acao=formularioAlterarFotoJogadores&jogadcod=<? echo $jogadcod;?>">Alterar Foto</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarJogadores&acao=formularioAlterarJogadores&jogadcod=<? echo $jogadcod;?>">
							Editar Cadastro
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o jogador?\n\nNome: <?php echo $nome.' '.$snome;?>')) {location='index.php?tabela=excluirJogadores&acao=excluirJogadores&jogadcod=<? echo $jogadcod;?>';}">
							Excluir Jogador
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