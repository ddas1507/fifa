<? $clubcod = $_REQUEST['clubcod'];?>
<? $clubnome = $_REQUEST['clubnome'];?>
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
						<li><b>Jogadores</b></li>
						<li>></li>
						<li>Cadastrar Novo Jogadores</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<fieldset ><legend>Dados Cadastrais</legend>
					<table width="100%">
						<tr><td>Foto do Jogador:</td><td ><input type="file" name="jogador_img" id="jogador_img" /></td></tr>
						<tr><td>Codigo do clube:</td><td><input type="text" name="clube_codigo" id="clube_codigo" size="30px" maxlength="30" readonly="readonly" value="<? echo $clubcod;?>" /></td></tr>
						<tr><td>Nome do Clube:</td><td><input type="text" name="clube_nome" id="clube_nome" size="30px" maxlength="30" readonly="readonly" value="<? echo $clubnome;?>" /></td></tr>
						<tr><td>Nome do Jogador:</td><td><input type="text" name="jogador_nome" id="jogador_nome" size="30px" maxlength="30" required="required" /></td></tr>
						<tr>
							<td>Posi&ccedil;&atilde;o:</td>							
							<td>
								<select name="jogador_posicao" id="jogador_posicao">
								  <option value="-">Selecionar Posi&ccedil;&atilde;o:</option>
								  <option value="g">Goleiro</option>
								  <option value="l">Laterais</option>
								  <option value="z">Zagueiros</option>
								  <option value="v">Volantes</option>
								  <option value="m">Meias</option>
								  <option value="a">Atacantes</option>
								</select>							
							</td>
						</tr>						
						<tr><td>Habilidade:</td><td><input type="text" name="jogador_habilidade" id="jogador_habilidade" size="30px" maxlength="3" onkeyup="proximoCampo(this, 'jogador_alterar')" onkeypress="mascara(this, '#.#')" required="required" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset >
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" id="jogador_salvar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarJogadores" name="tabela"/>
					<input type="hidden" value="gravarJogadores" name="acao"/>
					<input type="hidden" value="<? echo $clubcod;?>" name="clubcod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>