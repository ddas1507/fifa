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
<form name="formularioCadastrarTecnicos" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Debitos</b></li>
						<li>></li>
						<li>Cadastrar Novo Debito</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend>Dados</legend>
					<table width="100%">
						<tr><td >Foto:</td><td ><input type="file" name="debt_img" id="debt_img" /></td></tr>
						<tr><td>Nome:</td><td><input type="text" name="debt_nome" id="debt_nome" size="30px" maxlength="30" required="required" /></td></tr>
						<tr><td>Valor:</td><td><input type="text" name="debt_valor" id="debt_valor" size="30px" maxlength="30" required="required" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" id="debito_salvar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarDebitos" name="tabela"/>
					<input type="hidden" value="gravarDebitos" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>