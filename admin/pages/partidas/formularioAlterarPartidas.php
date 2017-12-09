<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<form name="formularioAlterarPartidas" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Partidas</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarPartidas&acao=listarPartidas">Consultar Partidas Cadastradas</a></b><li>
						<li>></li>
						<li>Atualizar Cadastro</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="25%">
		<tr>
			<td align="center" valign="top">
				<fieldset ><legend >Dados da Partida</legend>
					<table border="1" align="center" width="100%">
						<tr>
							<td style="text-align:right; width:100px;">CASA</td>
							<td style="text-align:center;"GOLS</td>
							<td rowspan="2" valign="center">X</td>
							<td style="text-align:center;"GOLS</td>
							<td style="text-align:left; width:100px;">VISITANTE</td>
						</tr>
						<tr>
							<td style="text-align:right; width:100px;"><?php echo $oquefazer->registros->PART_TIME_A;?></td>
							<td style="text-align:center;"><input style="text-align:center;" type="text" name="part_time_a_placar" id="part_time_a_placar" size="2px" maxlength="2" required="required" value="<?php echo $oquefazer->registros->PART_TIME_A_PLACAR;?>"/></td>					
							<td style="text-align:center;"><input style="text-align:center;" type="text" name="part_time_b_placar" id="part_time_b_placar" size="2px" maxlength="2" required="required" value="<?php echo $oquefazer->registros->PART_TIME_B_PLACAR;?>"/></td>
							<td style="text-align:left; width:100px;"><?php echo $oquefazer->registros->PART_TIME_B;?></td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td colspan="2" align="center">
				<fieldset>
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar" id="part_alterar"
					/>
					<input type="hidden" value="gravarAlteracaoPartidas" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoPartidas" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_TIME_A;?>" name="part_time_a"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_TIME_B;?>" name="part_time_b"/>
					
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_TIME_A_COD;?>" name="codigoTimeA"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_TIME_B_COD;?>" name="codigoTimeB"/>
					
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_CODIGO;?>" name="partcod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>