<form name="formularioAlterarFotoJogadores" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Jogadores</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarJogadores&acao=listarJogadores">Consultar Jogadores Cadastrados</a></b></li>
						<li>></li>
						<li>Alterar Foto</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset><legend class="titulo-fielset">Foto principal</legend>
					<table>
						<td >Clube:</td><td ><input type="text" name="jogador_nome" id="jogador_nome" size="100px" value="<?php echo $oquefazer->registros->JOGADOR_NOME;?>" disabled="disabled"/></td>
						<tr><td >Foto:</td><td ><input type="file" name="jogador_img" id="jogador_img" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>	
		<tr >
			<td colspan="2">
				<fieldset class="conteudo-fielset">
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar"
					/>
						&nbsp;
					<input 
						class="bt-restaurar" onmouseover="this.className='bt-restaurarOver'" onmouseout="this.className='bt-restaurar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
				<input type="hidden" value="gravarAlteracaoFotoJogadores" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoFotoJogadores" name="acao"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->JOGADOR_CODIGO;?>" name="jogadcod"/>
			</td>
		</tr>
	</table>
</form>