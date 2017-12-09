<?php
	$codigo	= $oquefazer->registros->USUARIO_CODIGO;
	$nome	= $oquefazer->registros->USUARIO_NOME;
	$img	= $oquefazer->registros->USUARIO_IMG;
	$snome	= $oquefazer->registros->USUARIO_SNOME;
	$email	= $oquefazer->registros->USUARIO_EMAIL;
	$senha	= $oquefazer->registros->USUARIO_SENHA;
	$nivel	= $oquefazer->registros->USUARIO_NIVEL;
	$celular = $oquefazer->registros->USUARIO_CEL;
	$dtcad	= $oquefazer->registros->USUARIO_DTCAD;
	$dtalt	= $oquefazer->registros->USUARIO_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Usu&aacute;rios</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarUsuarios&acao=listarUsuarios">Consultar Usu&aacute;rios</a></b></li>
					<li>></li>
					<li>Perfil de <?php echo $nome.' '.$snome?></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td >
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/usuarios/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
				</tr>
					<td align="center">
						<a href="index.php?tabela=formularioAlterarFotoUsuarios&acao=formularioAlterarFotoUsuarios&usercod=<? echo $codigo;?>">Alterar Foto</a>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >N&iacute;ivel</td><td class="tabela-dados-visualizar"><?php if($nivel == 1) echo 'Administrador'; else echo 'Usu&aacute;rio';	?></td></tr>
			
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $codigo;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $nome.' '.$snome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Email:</td><td class="tabela-dados-visualizar"><? echo $email;?></td></tr>
				<tr><td class="tabela-dados-labels" >Senha:</td><td class="tabela-dados-visualizar"><? echo $senha;?></td></tr>
				<tr><td class="tabela-dados-labels" >Celular:</td><td class="tabela-dados-visualizar"><? echo $celular;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
	</tr>
</table>