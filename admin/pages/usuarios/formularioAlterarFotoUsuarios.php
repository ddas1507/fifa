<form name="formularioAlterarFotoImoveis" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Usu&aacute;rios</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarUsuarios&acao=listarImoveis">Consultar Usu&aacute;rios Cadastrados</a></b></li>
						<li>></li>
						<li>Atualizar Foto</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Foto principal</legend>
					<table>
						<td >Usuario:</td><td ><input type="text" name="usuario_nome" id="usuario_nome" size="100px" value="<?php echo $oquefazer->registros->USUARIO_NOME;?>" disabled="disabled"/></td>
						<tr><td >Foto:</td><td ><input type="file" name="usuario_img" id="usuario_img" /></td></tr>
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
				<input type="hidden" value="gravarAlteracaoFotoUsuarios" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoFotoUsuarios" name="acao"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->USUARIO_CODIGO;?>" name="usercod"/>
			</td>
		</tr>
	</table>
</form>