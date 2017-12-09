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
<form name="formularioAlterarJogadores" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Jogador</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarJogadores&acao=listarJogadores">Consultar Jogador Cadastrados</a></b><li>
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
						<tr>
							<td>
							<img src="images/jogadores/<?php echo $oquefazer->registros->JOGADOR_IMG;?>" border="0" width="128px"/>
							</td>
							<td align="right" valign="top">
								<table width="100%">
									<tr><td>Nome:</td><td><input type="text" name="jogador_nome" id="jogador_nome" size="30px" maxlength="30" required="required" value="<?php echo $oquefazer->registros->JOGADOR_NOME;?>"/></td></tr>
									<tr>
										<td>Posi&ccedil;&atilde;o:</td>
										<td>
											<select name="jogador_posicao" id="jogador_posicao">						
												<?php
													$g = '';
													$l = '';
													$z = '';
													$v = '';
													$m = '';
													$a = '';
													
													switch($oquefazer->registros->JOGADOR_POSICAO)
													{
													case 'g': $g = 'selected';break;
													case 'l': $l = 'selected';break;
													case 'z': $z = 'selected';break;
													case 'v': $v = 'selected';break;
													case 'm': $m = 'selected';break;
													case 'a': $a = 'selected';break;
													}
												?>
												<option value="g" <?php echo $g;?>>Goleiro</option>
												<option value="l" <?php echo $l;?>>Laterais</option>
												<option value="z" <?php echo $z;?>>Zagueiros</option>
												<option value="v" <?php echo $v;?>>Volantes</option>
												<option value="m" <?php echo $m;?>>Meias</option>
												<option value="a" <?php echo $a;?>>Atacantes</option>
											</select>
										</td>
									</tr>						
									<tr><td>Habilidade:</td><td><input type="text" name="jogador_habilidade" id="jogador_habilidade" size="30px" maxlength="3" onkeyup="proximoCampo(this, 'jogador_alterar')" onkeypress="mascara(this, '#.#')" required="required" placeholder="Potencia do Jogador" value="<?php echo $oquefazer->registros->JOGADOR_HABILIDADE;?>"/></td></tr>
								</table>
							</td>
						
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
						type="submit" value="Alterar" name="Alterar" id="jogador_alterar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="gravarAlteracaoJogadores" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoJogadores" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->JOGADOR_CODIGO;?>" name="jogadcod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>