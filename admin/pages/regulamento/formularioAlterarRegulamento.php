<form name="formularioAlterarRegulamento" action="index.php" method="post">
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend>Formul&aacute;rio de Regulamento</legend>
					<table>
						<tr><td>Nome:</td><td><input type="text" name="reg_nome" id="reg_nome" value="<?php echo $oquefazer->registros->REG_NOME;?>" /></td></tr>
						<tr><td>Assunto:</td><td><input type="text" name="reg_assunto" id="reg_assunto" value="<?php echo $oquefazer->registros->REG_ASSUNTO;?>" /></td></tr>
						<tr><td valign="top">Mensagem:</td><td><textarea rows="5" cols="50" name="reg_mensagem" id="reg_mensagem" ><?php echo $oquefazer->registros->REG_MENSAGEM;?></textarea></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar" 
					/>
						&nbsp;
					<input 
						class="bt-restaurar" onmouseover="this.className='bt-restaurarOver'" onmouseout="this.className='bt-restaurar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="gravarAlteracaoRegulamento" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoRegulamento" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->REG_CODIGO;?>" name="codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>