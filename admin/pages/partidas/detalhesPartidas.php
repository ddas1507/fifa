<?php
	$partcod		= $oquefazer->registros->PART_CODIGO;
	$time_a			= $oquefazer->registros->PART_TIME_A;
	$time_b			= $oquefazer->registros->PART_TIME_B;
	$time_a_placar	= $oquefazer->registros->PART_TIME_A_PLACAR;
	$time_b_placar	= $oquefazer->registros->PART_TIME_B_PLACAR;
	$part_inicio	= $oquefazer->registros->PART_DT_H_I;
	$part_final		= $oquefazer->registros->PART_DT_H_F;
	$dtcad			= $oquefazer->registros->PART_DT_CAD;
	$dtalt			= $oquefazer->registros->PART_DT_ALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Partida</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarPartidas&acao=listarPartidas">Consultar Partidas</a></b></li>
					<li>></li>
					<li>Detalhes - <?php echo $time_a;?> <?php echo $time_a_placar;?> x <?php echo $time_b_placar;?> <?php echo $time_b;?></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $partcod;?></td></tr>
				<tr><td class="tabela-dados-labels" >TIME A:</td><td class="tabela-dados-visualizar"><? echo $time_a;?></td></tr>
				<tr><td class="tabela-dados-labels" >TIME B:</td><td class="tabela-dados-visualizar"><? echo $time_b;?></td></tr>
				<tr><td class="tabela-dados-labels" >PLACAR TIME A:</td><td class="tabela-dados-visualizar"><? echo $time_a_placar;?></td></tr>
				<tr><td class="tabela-dados-labels" >PLACAR TIME B:</td><td class="tabela-dados-visualizar"><? echo $time_b_placar;?></td></tr>
				<tr><td class="tabela-dados-labels" >INICIO:</td><td class="tabela-dados-visualizar"><? echo $part_inicio;?></td></tr>
				<tr><td class="tabela-dados-labels" >FINAL:</td><td class="tabela-dados-visualizar"><? echo $part_final;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($partcod == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Opc&otilde;es</td>
				</tr>
				<!--tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarPartidas&acao=formularioAlterarPartidas&partcod=<? //echo $partcod;?>">
							Editar Cadastro
						</a>
					</td>
				</tr-->
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o jogo abaixo?\n\n\Partida: <?php echo $time_a;?> (<?php echo $time_a_placar;?>) VS (<?php echo $time_b_placar;?>) <?php echo $time_b;?>')) {location='index.php?tabela=excluirPartidas&acao=excluirPartidas&partcod=<? echo $partcod;?>';}">
							Excluir Partida
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