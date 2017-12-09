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
			<td align="right">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>		
				<!--input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" title="Novo usu&aacute;rio" 
				/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="tabela"/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="acao"/-->		
				<?
				}
				else{
				
				}
				?>	
			</td>
		</tr>
	</table>
</form>	
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$usercod = $oquefazer->registros->USUARIO_CODIGO;
					$cargo	= $oquefazer->registros->USUARIO_NIVEL;
					$nome	= $oquefazer->registros->USUARIO_NOME;
					$img	= $oquefazer->registros->USUARIO_IMG;
					$snome	= $oquefazer->registros->USUARIO_SNOME;
					$dtcad	= $oquefazer->registros->USUARIO_DTCAD;
					$dtalt	= $oquefazer->registros->USUARIO_DTALT;
					
					$torneio = $oquefazer->registros->USUARIO_T;
					$rl	= $oquefazer->registros->USUARIO_RL;
					$pl	= $oquefazer->registros->USUARIO_PL;
					$jl	= $oquefazer->registros->USUARIO_JL;
					$vl	= $oquefazer->registros->USUARIO_VL;
					$el	= $oquefazer->registros->USUARIO_EL;
					$dl	= $oquefazer->registros->USUARIO_DL;
					$gpl= $oquefazer->registros->USUARIO_GPL;
					$gcl= $oquefazer->registros->USUARIO_GCL;
					$sgl= $oquefazer->registros->USUARIO_SGL;
					$rc	= $oquefazer->registros->USUARIO_RC;
					$pc	= $oquefazer->registros->USUARIO_PC;
					$jc	= $oquefazer->registros->USUARIO_JC;
					$vc	= $oquefazer->registros->USUARIO_VC;
					$ec	= $oquefazer->registros->USUARIO_EC;
					$dc	= $oquefazer->registros->USUARIO_DC;
					$gpc= $oquefazer->registros->USUARIO_GPC;
					$gcc= $oquefazer->registros->USUARIO_GCC;
					$sgc= $oquefazer->registros->USUARIO_SGC;
			?>
				<table border="0" style=" width:100%;border-collapse:collapse;">
					<tr><td colspan="2"><a href="index.php?tabela=detalhesUsuarios&acao=detalhesUsuarios&usercod=<? echo $usercod;?>"><? echo $nome.' '.$snome;?></a></td></tr>
					<tr id="corpo-tabela">
						<td valign="top" style="width:128px;max-width: 128px;max-height: 128px;height: 192px;">
							<a href="index.php?tabela=detalhesUsuarios&acao=detalhesUsuarios&usercod=<? echo $usercod;?>">
								<img src="images/usuarios/<?php echo $img;?>" border="0" width="128px"/>
							</a>
						</td>
						<td valign="top">
							<table border="1" style="background-color:#efefef; border:1px solid #bbb;width:100%;border-collapse:collapse; margin: 2px;">
								<tr><td colspan="8" style="background:#333; color:#fff;">Copa Libertadores</td></tr>
								<tr>									
									<td style="width:35px; text-align:center;">PTS</td>
									<td style="width:35px; text-align:center;">J</td>
									<td style="width:35px; text-align:center;">V</td>
									<td style="width:35px; text-align:center;">E</td>
									<td style="width:35px; text-align:center;">D</td>
									<td style="width:35px; text-align:center;">GP</td>
									<td style="width:35px; text-align:center;">GC</td>
									<td style="width:35px; text-align:center;">SG</td>
								</tr>
								<tr>
									<td style="width:35px; text-align:center;"><?php echo $pl;?></td>
									<td style="width:35px; text-align:center;"><?php echo $jl;?></td>
									<td style="width:35px; text-align:center;"><?php echo $vl;?></td>
									<td style="width:35px; text-align:center;"><?php echo $el;?></td>
									<td style="width:35px; text-align:center;"><?php echo $dl;?></td>
									<td style="width:35px; text-align:center;"><?php echo $gpl;?></td>
									<td style="width:35px; text-align:center;"><?php echo $gcl;?></td>
									<td style="width:35px; text-align:center;"><?php echo $sgl;?></td>
								</tr>
								<tr><td colspan="8" style="background:#333; color:#fff;">Champions League</td></tr>
								<tr>
									<td style="width:35px; text-align:center;">PTS</td>
									<td style="width:35px; text-align:center;">J</td>
									<td style="width:35px; text-align:center;">V</td>
									<td style="width:35px; text-align:center;">E</td>
									<td style="width:35px; text-align:center;">D</td>
									<td style="width:35px; text-align:center;">GP</td>
									<td style="width:35px; text-align:center;">GC</td>
									<td style="width:35px; text-align:center;">SG</td>
								</tr>
								<tr>
									<td style="width:35px; text-align:center;"><?php echo $pc;?></td>
									<td style="width:35px; text-align:center;"><?php echo $jc;?></td>
									<td style="width:35px; text-align:center;"><?php echo $vc;?></td>
									<td style="width:35px; text-align:center;"><?php echo $ec;?></td>
									<td style="width:35px; text-align:center;"><?php echo $dc;?></td>
									<td style="width:35px; text-align:center;"><?php echo $gpc;?></td>
									<td style="width:35px; text-align:center;"><?php echo $gcc;?></td>
									<td style="width:35px; text-align:center;"><?php echo $sgc;?></td>
								</tr>										
							</table>
						</td>
					</tr>			
				</table>
				<?php
				}
			?>
	</table>
</div>