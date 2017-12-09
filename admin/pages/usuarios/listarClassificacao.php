<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Usu&aacute;rios Cadastrados</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</form>	

	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="1" class="display" id="listagem" style=" margin: 5px; border: 1px solid #eee; ">
		<tr><td colspan="10" style="background:#333; color:#fff;"><label style=" margin: 15px; font-size: 25px; font-weight: bold;">Copa Libertadores da Am&eacute;rica</label></td></tr>
		<tr>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">Posi&ccedil;&atilde;o</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">Nome</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">PTS</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">J</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">V</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">E</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">D</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">GP</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">GC</td>
			<td style="width:35px; text-align:center; background:#555; color:#fff;">SG</td>
		</tr>	
			<?php
				$i = 0;
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$usercod = $oquefazer->registros->USUARIO_CODIGO;
					$cargo	= $oquefazer->registros->USUARIO_NIVEL;
					$nome	= $oquefazer->registros->USUARIO_NOME;
					$img	= $oquefazer->registros->USUARIO_IMG;
					$snome	= $oquefazer->registros->USUARIO_SNOME;
					$dtcad	= $oquefazer->registros->USUARIO_DTCAD;
					$dtalt	= $oquefazer->registros->USUARIO_DTALT;
					
					$rl	= $oquefazer->registros->USUARIO_RL;
					$pl	= $oquefazer->registros->USUARIO_PL;
					$jl	= $oquefazer->registros->USUARIO_JL;
					$vl	= $oquefazer->registros->USUARIO_VL;
					$el	= $oquefazer->registros->USUARIO_EL;
					$dl	= $oquefazer->registros->USUARIO_DL;
					$gpl= $oquefazer->registros->USUARIO_GPL;
					$gcl= $oquefazer->registros->USUARIO_GCL;
					$sgl= $gpl - $gcl;
					$rc	= $oquefazer->registros->USUARIO_RC;
					$pc	= $oquefazer->registros->USUARIO_PC;
					$jc	= $oquefazer->registros->USUARIO_JC;
					$vc	= $oquefazer->registros->USUARIO_VC;
					$ec	= $oquefazer->registros->USUARIO_EC;
					$dc	= $oquefazer->registros->USUARIO_DC;
					$gpc= $oquefazer->registros->USUARIO_GPC;
					$gcc= $oquefazer->registros->USUARIO_GCC;
					$sgc= $gpc - $gcc;
					$i++;
			?>
		<? if($i == 1){ ?>	<tr style="background-color:#5a5; color:#fff;" >
		<?}else if($i == 2){ ?>	<tr style="background-color:#5a5; color:#fff;" >
		<?}else if($i == 3){ ?>	<tr style="background-color:#5a5; color:#fff;" >
		<?}else if($i == 4){ ?>	<tr style="background-color:#5a5; color:#fff;" >
		<?}else if($i == 5){ ?>	<tr style="background-color:#05a; color:#fff;" >
		<?}else if($i == 6){ ?>	<tr style="background-color:#05a; color:#fff;" >
		<?}else if($i >= 7){ ?>	<tr style="background-color:#900; color:#fff;" >
		<?}?>
		
			<td style="width:35px; text-align:center;"><? echo $i.'&deg;';?></td>
			<td><a href="index.php?tabela=detalhesUsuarios&acao=detalhesUsuarios&usercod=<? echo $usercod;?>" style="color:#fff;" <? if($i == 1){ ?> title="1&deg; Semi-Finalista"<?}
			else if($i == 2){ ?> title="2 &deg; Semi-Finalista"<?}	else if($i == 3){ ?> title="3 &deg; Semi-Finalista"<?}	else if($i == 4){ ?> title="Quase que esse n&atilde;o vai para as semi-finais"<?}
			else if($i == 5){ ?> title="Esse aqui estacionou!"<?} else if($i == 6){?>title="Esse quase caiu!"<?}
			else if($i == 7){ ?> title="Perdeu Playboy!!!"<?}else if($i == 8){ ?> title="Se Fudeu!!!"<?}?>> <? echo $nome.' '.$snome;?></a></td>
			<td style="width:35px; text-align:center;"><?php echo $pl;?></td>
			<td style="width:35px; text-align:center;"><?php echo $jl;?></td>
			<td style="width:35px; text-align:center;"><?php echo $vl;?></td>
			<td style="width:35px; text-align:center;"><?php echo $el;?></td>
			<td style="width:35px; text-align:center;"><?php echo $dl;?></td>
			<td style="width:35px; text-align:center;"><?php echo $gpl;?></td>
			<td style="width:35px; text-align:center;"><?php echo $gcl;?></td>
			<td style="width:35px; text-align:center;"><?php echo $sgl;?></td>
		</tr>
				<?php
				}$i++;
			?>
			<!--tr>
				<td colspan="10" align="right">
					<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\n\nVoc&ecirc; deseja limpar a tabela de classifica&ccedil;&atilde;o?')){location='index.php?tabela=zerarTabelaClassificacao&acao=zerarTabelaClassificacao';}">Zerar Tabela</a>
				</td>
			</tr-->
	</table>
</div>