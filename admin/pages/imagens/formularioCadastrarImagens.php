<? $usercod = $_REQUEST['usercod']?>
<form name="formularioCadastrarUsuarios" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Imagens</b></li>
						<li>></li>
						<li>Cadastrar Nova Imagem</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Pessoais</legend>
					<table>
						<tr><td>Foto:</td><td><input type="file" name="img_descricao" id="img_descricao" size="100px" maxlength="50" required="required" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td>
				<fieldset class="conteudo-fielset">
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" 
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarImagens" name="tabela"/>
					<input type="hidden" value="gravarImagens" name="acao"/>
					<input type="hidden" value="<?echo $usercod;?>" name="usercod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>