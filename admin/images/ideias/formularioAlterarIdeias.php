<form name="formularioAlterarIdeias" action="index.php" method="post">
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend>Formul&aacute;rio de ideias</legend>
					<table>
						<tr><td>Nome:</td><td><input type="text" name="ideia_nome" id="ideia_nome" value="<?php echo $oquefazer->registros->IDEIA_NOME;?>" /></td></tr>
						<tr><td>Assunto:</td><td><input type="text" name="ideia_assunto" id="ideia_assunto" value="<?php echo $oquefazer->registros->IDEIA_ASSUNTO;?>" /></td></tr>
						<tr><td valign="top">Mensagem:</td><td><textarea rows="5" cols="50" name="ideia_mensagem" id="ideia_mensagem" ><?php echo $oquefazer->registros->IDEIA_MENSAGEM;?></textarea></td></tr>
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
					<input type="hidden" value="gravarAlteracaoIdeias" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoIdeias" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->IDEIA_CODIGO;?>" name="codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>