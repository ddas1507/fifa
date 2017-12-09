<form name="formularioCadastrarRegulamento" action="index.php" method="post">
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend >Formul&aacute;rio de Regulamento</legend>
					<table>
						<tr><td style="text-align:right;">Nome:</td><td><input type="text" name="reg_nome" id="reg_nome" placeholder="Digite seu Nome" /></td></tr>
						<tr><td style="text-align:right;">Assunto:</td><td><input type="text" name="reg_assunto" id="reg_assunto" placeholder="Digite o Assunto" /></td></tr>
						<tr><td style="text-align:right;" valign="top">Mensagem:</td><td><textarea rows="5" cols="50" name="reg_mensagem" id="reg_mensagem" placeholder="Digite sua mensagem"></textarea></td></tr>
					</table>
				</fieldset> 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" 
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarRegulamento" name="tabela"/>
					<input type="hidden" value="gravarRegulamento" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>