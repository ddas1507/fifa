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
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend >Dados da Partida</legend>
					<table width="100%">
						<tr><td>TIME A:</td><td><input type="text" name="part_time_a" id="part_time_a" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_TIME_A;?>"/></td></tr>
						<tr><td>TIME B:</td><td><input type="text" name="part_time_b" id="part_time_b" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_TIME_B;?>"/></td></tr>
						<tr><td>PLACAR TIME A:</td><td><input type="text" name="part_time_a_placar" id="part_time_a_placar" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_TIME_A_PLACAR;?>"/></td></tr>
						<tr><td>PLACAR TIME B:</td><td><input type="text" name="part_time_b_placar" id="part_time_b_placar" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_TIME_B_PLACAR;?>"/></td></tr>
						<tr><td>INICIO:</td><td><input type="text" name="part_dt_h_i" id="part_dt_h_i" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_DT_H_I;?>"/></td></tr>
						<tr><td>FINAL:</td><td><input type="text" name="part_dt_h_f" id="part_dt_h_f" size="30px" maxlength="50" required="required" value="<?php echo $oquefazer->registros->PART_DT_H_F;?>"/></td></tr>
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
					<input type="hidden" value="gravarAlteracaoPartidas" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoPartidas" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PART_CODIGO;?>" name="partcod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>