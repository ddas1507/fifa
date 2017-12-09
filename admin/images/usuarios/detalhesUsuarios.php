<?php
	$codigo	= $oquefazer->registros->USUARIO_CODIGO;
	$nome	= $oquefazer->registros->USUARIO_NOME;
	$snome	= $oquefazer->registros->USUARIO_SNOME;
	$cpf	= $oquefazer->registros->USUARIO_CPF;
	$img	= $oquefazer->registros->USUARIO_IMG;
	$img2	= $oquefazer->registros->USUARIO_IMG2;
	$email	= $oquefazer->registros->USUARIO_EMAIL;
	$senha	= $oquefazer->registros->USUARIO_SENHA;
	$nivel	= $oquefazer->registros->USUARIO_NIVEL;
	$celular = $oquefazer->registros->USUARIO_CEL;
	$dtcad	= $oquefazer->registros->USUARIO_DTCAD;
	$dtalt	= $oquefazer->registros->USUARIO_DTALT;
?>
<table class="tabela-nevegacao" border="0"> 
	<tr>
		<td colspan="4" align="left">
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
<table  style="width:100%;" border="0">
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/usuarios/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>
				<tr><td class="tabela-dados-labels" >N&iacute;ivel</td><td class="tabela-dados-visualizar"><?php if($nivel == 1) echo 'Administrador'; else echo 'Usu&aacute;rio';	?></td></tr>
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $codigo;?></td></tr>
				<tr><td class="tabela-dados-labels" >Senha:</td><td class="tabela-dados-visualizar"><? echo $senha;?></td></tr>
				<?}else{}?>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $nome.' '.$snome;?></td></tr>
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>
				<tr><td class="tabela-dados-labels" >CPF:</td><td class="tabela-dados-visualizar"><? echo $cpf;?></td></tr>
				<?}else{}?>
				<tr><td class="tabela-dados-labels" >Email:</td><td class="tabela-dados-visualizar"><? echo $email;?>&nbsp;-&nbsp;<a href="mailto:<? echo $email;?>?Subject=Campeonato%20FIFA%202013" target="_top">enviar e-mail</a>
				</td></tr>
				<tr><td class="tabela-dados-labels" >Celular:</td><td class="tabela-dados-visualizar"><? echo $celular;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Configura&ccedil&otilde;es da conta</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarFotoUsuarios&acao=formularioAlterarFotoUsuarios&usercod=<? echo $codigo;?>">
							Alterar Foto
						</a>
					</td>
				</tr>
				<tr>
					<!--td align="right">
						<a href="index.php?tabela=formularioAlterarFotoFundoUsuarios&acao=formularioAlterarFotoFundoUsuarios&usercod=<? echo $codigo;?>">
							Alterar Fundo
						</a>
					</td-->
				</tr>				
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarUsuarios&acao=formularioAlterarUsuarios&usercod=<? echo $codigo;?>">
							Editar Cadastro
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro?\n\nUsuario: <?php echo $nome.' '.$snome;?>')) {location='index.php?tabela=excluirUsuarios&acao=excluirUsuarios&usercod=<? echo $codigo;?>';}">
							Encerrar Conta
						</a>
					</td>
				</tr>
				<?
				}
				else{
				
				}
				?>			
			</table>
		</td>
	</tr>
</table>