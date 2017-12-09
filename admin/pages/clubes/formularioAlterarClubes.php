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
<form name="formularioAlterarClubes" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Clubes</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarClubes&acao=listarClubes">Consultar Clubes Cadastrados</a></b><li>
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
				<fieldset ><legend >Dados Cadastrais</legend>
					<table width="100%">
						<tr><td>Nome:</td><td><input type="text" name="clube_nome" id="clube_nome" size="30px" maxlength="30" required="required" value="<?php echo $oquefazer->registros->CLUBE_NOME;?>"/></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td colspan="2">
				<fieldset>
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar" id="clube_alterar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="gravarAlteracaoClubes" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoClubes" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->CLUBE_CODIGO;?>" name="clubcod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>