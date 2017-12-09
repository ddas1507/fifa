<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script>
function mascara(src, mask){
	var i = src.value.length;
	var saida = mask.substring(0,1);
	var texto = mask.substring(i)
	
	if (texto.substring(0,1) != saida){
		src.value += texto.substring(0,1);
	}
} 

function proximoCampo(atual,proximo){
	if(atual.value.length >= atual.maxLength){
		document.getElementById(proximo).focus();
	}
}
</script>
<form name="formularioCadastrarTecnicos" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Inscri&ccedil;&atilde;o</b></li>
						<li>></li>
						<li>Formul&aacute;rio de Inscri&ccedil;&atilde;o</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend>Dados Pessoais</legend>
					<table width="100%">
						<tr><td>Nome:</td><td><input type="text" name="usuario_nome" id="usuario_nome" size="30px" maxlength="30" required="required" /></td></tr>
						<tr><td>Sobrenome:</td><td><input type="text" name="usuario_snome" id="usuario_snome" size="30px" maxlength="30" required="required" /></td></tr>
						<tr><td>Email:</td><td><input type="text" name="usuario_email" id="usuario_email" size="30" maxlength="50" required="required"/></td></tr>
						<tr><td>Senha:</td><td><input type="text" name="usuario_pass" id="usuario_pass" size="30" maxlength="30" required="required"/></td></tr>
						<tr><td>Celular:</td><td><input type="text" name="usuario_cel" id="usuario_cel" size="30px" maxlength="14" onkeyup="proximoCampo(this, 'usuario_salvar')" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" id="usuario_salvar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarUsuarios" name="tabela"/>
					<input type="hidden" value="gravarUsuarios" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>