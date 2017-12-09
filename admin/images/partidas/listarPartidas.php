<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Partidas Cadastrados</li>
					</ul>
				</div>
			</td>
			
			<td align="right">
				<?php
				$nome = $_SESSION['sessao_nome_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($nome == 'Kaka' )||($nivel == 1)){?>			
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" title="Novo Credito" 
				/>
				<input type="hidden" value="formularioCadastrarPartidasp1" name="tabela"/>
				<input type="hidden" value="formularioCadastrarPartidasp1" name="acao"/>
				<input type="hidden" value="1" name="torneio"/>
				<?
				}
				else{
				
				}
				?>
			</td>
		</tr>
	</table>
</form>	
	<table border="0" width="35%">
		<!--tr>
			<td align="center" style="background-color:#efefef; color:#555;">REALIZADO EM</td>
			<td align="center" style="background-color:#efefef; color:#555;">INICIO</td>
			<td align="center" style="background-color:#efefef; color:#555;">FINAL</td>
			<td align="center" style="background-color:#efefef; color:#555;">TIME A</td>
			<td align="center" style="background-color:#efefef; color:#555;">GOL(S)</td>
			<td align="center" style="background-color:#efefef; color:#555;">VS</td>
			<td align="center" style="background-color:#efefef; color:#555;">GOL(S)</td>
			<td align="center" style="background-color:#efefef; color:#555;">TIME B</td>
			<td align="center" style="background-color:#efefef; color:#555;">Detalhes</td>
		</tr-->
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$partcod = $oquefazer->registros->PART_CODIGO;
					$rodada = $oquefazer->registros->PART_RODADA;
					$part_time_a_cod = $oquefazer->registros->PART_TIME_A_COD;
					$part_time_b_cod = $oquefazer->registros->PART_TIME_B_COD;
					$part_time_a = $oquefazer->registros->PART_TIME_A;
					$part_time_b = $oquefazer->registros->PART_TIME_B;
					$part_time_a_placar = $oquefazer->registros->PART_TIME_A_PLACAR;
					$part_time_b_placar = $oquefazer->registros->PART_TIME_B_PLACAR;
					$inicio = $oquefazer->registros->PART_DT_H_I;
					$final	= $oquefazer->registros->PART_DT_H_F;
					$dtcad	= $oquefazer->registros->PART_DT_CAD;
					$dtalt	= $oquefazer->registros->PART_DT_ALT;
			?>
			<tr><td colspan="2" style="background:#555; color:#fff; text-align:center;" ><? echo $rodada.'&ordf;';?> RODADA</td></tr>
			<tr>
				<td colspan="2">
					<table border="0" width="100%">
						<tr>
							<td style="text-align:right; width: 115px;"><input type="hidden" name="part_time_a" value="<? echo $part_time_a;?>" /><? echo $part_time_a;?></td>
							<td style="text-align:center; width: 45px;"><input type="text" name="part_time_a_placar" size="1" maxlength="1" value="<? echo $part_time_a_placar;?>" style="text-align:center;" disabled="disabled"></td>
							<?php
							$nome = $_SESSION['sessao_nome_usuario'];
							$nivel = $_SESSION['sessao_nivel_usuario'];
							if(($nome == 'Kaka' )||($nivel == 1)){?>			
								<td align="center" class="dados-tabelas"><a href="index.php?tabela=detalhesPartidas&acao=detalhesPartidas&partcod=<? echo $partcod;?>"><img src="images/others/view.png" title="Visualizar Detalhes" width="24px"></a></td><?
							}
							else{
							echo 'x';
							}
							?>
							<td style="text-align:center ;width: 45px;"><input type="text" name="part_time_b_placar" size="1" maxlength="1" value="<? echo $part_time_b_placar;?>" style="text-align:center;" disabled="disabled"></td>
							<td style="text-align:left; width: 115px;"><input type="hidden" name="part_time_b" value="<? echo $part_time_b;?>" /><? echo $part_time_b;?></td>
						</tr>
						<tr>
							<td align="center" class="dados-tabelas" colspan="2">&nbsp;</td>
							<?php
							$nome = $_SESSION['sessao_nome_usuario'];
							$nivel = $_SESSION['sessao_nivel_usuario'];
							if(($nome == 'Kaka' )||($nivel == 1)){?>			
							<td align="center" class="dados-tabelas"><a href="index.php?tabela=formularioAlterarPartidas&acao=formularioAlterarPartidas&partcod=<? echo $partcod;?>"><img src="images/others/update.png" title="Alterar Dados" width="24px"/></a></td><?
							}
							else{
							
							}
							?>							
							<td align="center" class="dados-tabelas" colspan="2">&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
			<!--tr><td>Partida Registrada em:</td><td><? //echo $dtcad;?></td></tr>
			<tr><td>Ultima Alteracao em:</td><td><? //echo $dtalt;?></td></tr>
			<tr><td>Partida Realizada em:</td><td>?<? //echo $dtcad;?></td></tr-->
		
			<!--tr>
				<td align="center" class="dados-tabelas"><? //echo $inicio;?></td>
				<td align="center" class="dados-tabelas"><? //echo $final;?></td>
				<td align="center" class="dados-tabelas"></td>
				<td align="center" class="dados-tabelas"><? //echo $part_time_b_placar;?></td>
				<td align="center" class="dados-tabelas"></td>
				<td align="center" class="dados-tabelas"><a href="index.php?tabela=detalhesPartidas&acao=detalhesPartidas&partcod=<? echo $partcod;?>">Ver</a></td>
			</tr-->
			<?php
			}
		?>
	</table>
</div>