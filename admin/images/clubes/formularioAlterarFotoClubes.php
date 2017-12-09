<form name="formularioAlterarFotoClubes" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Usu&aacute;rios</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarClubes&acao=listarClubes">Consultar Clubes Cadastrados</a></b></li>
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
						<td >Clube:</td><td ><input type="text" name="clube_nome" id="clube_nome" size="100px" value="<?php echo $oquefazer->registros->CLUBE_NOME;?>" disabled="disabled"/></td>
						<tr><td >Foto:</td><td ><input type="file" name="clube_img" id="clube_img" /></td></tr>
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
				<input type="hidden" value="gravarAlteracaoFotoClubes" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoFotoClubes" name="acao"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->CLUBE_CODIGO;?>" name="clubcod"/>
			</td>
		</tr>
	</table>
</form>