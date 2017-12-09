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
<form name="formularioAlterarTecnicos" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>T&eacute;cnicos</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarTecnicos&acao=listarTecnicos">Consultar T&eacute;cnicos Cadastrados</a></b><li>
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
				<fieldset ><legend >Dados Pessoais</legend>
					<table width="100%">
					<?php
						$nivel = $_SESSION['sessao_nivel_usuario'];
					if($nivel == 1){?>
					
						<tr>
							<td>N&iacute;vel:</td>
							<td>
								<select name="usuario_nivel" id="usuario_nivel">
									<?php
										$adm = '';
										$tec = '';
										
										switch($oquefazer->registros->USUARIO_NIVEL)
										{
										case '1': $adm = 'selected';break;
										case '2': $tec = 'selected';break;
										}
									?>
									<option value="1" <?php echo $adm;?>>Administrador</option>
									<option value="2" <?php echo $tec;?>>Usu&aacute;rio</option>
								</select>
							</td>
						</tr>					
					<?
					}
					else{?>
					<?
					}
					?>
						<tr><td>Nome:</td><td><input type="text" name="usuario_nome" id="usuario_nome" size="30px" maxlength="30" required="required" value="<?php echo $oquefazer->registros->USUARIO_NOME;?>"/></td></tr>
						<tr><td>Sobrenome:</td><td><input type="text" name="usuario_snome" id="usuario_snome" size="30px" maxlength="30" required="required" value="<?php echo $oquefazer->registros->USUARIO_SNOME;?>"/></td></tr>
						<tr><td>Email:</td><td><input type="text" name="usuario_email" id="usuario_email" size="30" maxlength="50" required="required" value="<?php echo $oquefazer->registros->USUARIO_EMAIL;?>"/></td></tr>
						<tr><td>Celular:</td><td><input type="text" name="usuario_cel" id="usuario_cel" size="30px" maxlength="14" onkeyup="proximoCampo(this, 'usuario_alterar')" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')" value="<?php echo $oquefazer->registros->USUARIO_CEL;?>"/></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td colspan="2">
				<fieldset>
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar" id="usuario_alterar"
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="gravarAlteracaoUsuarios" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoUsuarios" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->USUARIO_CODIGO;?>" name="usercod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>