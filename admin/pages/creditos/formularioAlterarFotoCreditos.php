<form name="formularioAlterarFotoCreditos" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Creditos</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarCreditos&acao=listarCreditos">Consultar Creditos Cadastrados</a></b></li>
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
				<fieldset><legend >Foto principal</legend>
					<table>
						<td >Creditos:</td><td ><input type="text" name="cred_nome" id="cred_nome" size="100px" value="<?php echo $oquefazer->registros->CRED_NOME;?>" disabled="disabled"/></td>
						<tr><td >Foto:</td><td ><input type="file" name="cred_img" id="cred_img" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>	
		<tr>
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
				<input type="hidden" value="gravarAlteracaoFotoCreditos" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoFotoCreditos" name="acao"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->CRED_CODIGO;?>" name="debtcod"/>
			</td>
		</tr>
	</table>
</form>