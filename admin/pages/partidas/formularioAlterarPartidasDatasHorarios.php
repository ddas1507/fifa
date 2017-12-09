<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<form name="formularioAlterarPartidasDatasHorarios" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Partidas</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarPartidas&acao=listarPartidas">Consultar Partidas Cadastradas</a></b><li>
						<li>></li>
						<li>Atualizar Data e Horario</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend >Dados da Partida</legend>
					<table width="100%">
						<tr><td>INICIO:</td><td><input type="text" name="part_dt_h_i" id="part_dt_h_i" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_DT_H_I;?>"/></td></tr>
						<tr><td>FINAL:</td><td><input type="text" name="part_dt_h_f" id="part_dt_h_f" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_DT_H_F;?>"/></td></tr>

						<tr>
							<td>Dia / M&ecirc;s / Ano:</td>
							<td>
							<input type="text" name="part_dt_d" id="part_dt_d" size="2px" maxlength="2" required="required" value="<?php echo $oquefazer->registros->PART_DT_D;?>"/>&nbsp;/&nbsp;
							<input type="text" name="part_dt_m" id="part_dt_m" size="2px" maxlength="2" required="required" value="<?php echo $oquefazer->registros->PART_DT_M;?>"/>&nbsp;/&nbsp;
							<input type="text" name="part_dt_a" id="part_dt_a" size="4px" maxlength="4" required="required" value="<?php echo $oquefazer->registros->PART_DT_A;?>"/>
							</td>
						</tr>
						<tr>
							<td>Local:</td>
							<td><input type="text" name="part_dt_local" id="part_dt_local" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_DT_LOCAL;?>"/></td>
						</tr>
						<tr>
							<td>Obs:</td>
							<td><input type="text" name="part_dt_obs" id="part_dt_obs" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_DT_OBS;?>"/></td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td colspan="2">
				<fieldset>
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar" id="part_alterar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="gravarAlteracaoPartidasDatasHorarios" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoPartidasDatasHorarios" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_CODIGO;?>" name="partcod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>