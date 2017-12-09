<?php
	$codigo	= $oquefazer->registros->USUARIO_CODIGO;
	$nome	= $oquefazer->registros->USUARIO_NOME;
	$snome	= $oquefazer->registros->USUARIO_SNOME;
	$cpf	= $oquefazer->registros->USUARIO_CPF;
	$img	= $oquefazer->registros->USUARIO_IMG;
	$libertadores_musica	= $oquefazer->registros->CLUBE_LIBERTADORES_MUSICA;
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
<style type="text/css">
.ftdu{	height: 798px;background: url('images/others/campo.jpg')no-repeat;opacity: 0.5;}
</style>
<!--div class="ftdu"-->
<table border="0" style="width:100%;" >
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/usuarios/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
				<tr>
					<td align="center"><embed src="songs/usuarios/<?php echo $libertadores_musica;?>" loop="true" autoplay="true" width="200" height="0" ></embed></td>
				</tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>
				<!--tr><td class="tabela-dados-labels" >N&iacute;ivel</td><td class="tabela-dados-visualizar"><?php //if($nivel == 1) echo 'Administrador'; else echo 'Usu&aacute;rio';	?></td></tr-->
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $codigo;?></td></tr>
				<!--tr><td class="tabela-dados-labels" >Senha:</td><td class="tabela-dados-visualizar"><? echo $senha;?></td></tr-->
				<?}else{}?>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $nome.' '.$snome;?></td></tr>
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>
				<tr><td class="tabela-dados-labels" >CPF:</td><td class="tabela-dados-visualizar"><? echo $cpf;?></td></tr>
				<?}else{}?>
				<tr><td class="tabela-dados-labels" >Email:</td><td class="tabela-dados-visualizar"><? echo $email;?>&nbsp;-&nbsp;<a href="mailto:<? echo $email;?>?Subject=Campeonato%20FIFA%202013" target="_top">enviar e-mail</a></td></tr>
				<tr><td class="tabela-dados-labels" >Celular:</td><td class="tabela-dados-visualizar"><? echo $celular;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
				
				<tr>
					<td style="background:#fff; color:#333; text-align:center;" >JOGOS</td>
						<td >
							<table border="0" width="100%" style="border-collapse:collapse;">
								<tr>
									<td style="text-align:right; width: 115px;">CASA</td>
									<td style="text-align:center; width: 115px;">GOLS</td>
									<td align="center" class="dados-tabelas">x</td>
									<td style="text-align:center ;width: 115px;">GOLS</td>
									<td style="text-align:left; width: 115px;">FORA</td>
								</tr>
							</table>
						</td>
				</tr>
				<?php
					while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
					{
						$partcod = $oquefazer->registros->PART_CODIGO;
						$rodada = $oquefazer->registros->PART_RODADA;
						$part_time_a_cod = $oquefazer->registros->PART_TIME_A_COD;
						$part_time_b_cod = $oquefazer->registros->PART_TIME_B_COD;
						$part_time_a = $oquefazer->registros->PART_TIME_A;
						$part_time_b = $oquefazer->registros->PART_TIME_B;
						$part_time_a_placar = $oquefazer->registros->PART_TIME_A_PLACAR;
						$part_time_b_placar = $oquefazer->registros->PART_TIME_B_PLACAR;
						$inicio = $oquefazer->registros->PART_DT_H_I;
						$final	= $oquefazer->registros->PART_DT_H_F;
						$dtcad	= $oquefazer->registros->PART_DT_CAD;
						$dtalt	= $oquefazer->registros->PART_DT_ALT;
				?>
				<tr>
					<td style="background:#fff; color:#333; text-align:center;" ><? echo $rodada.'&ordf;';?> RODADA</td>
					<td >
						<table border="0" width="100%">
							</tr>
								<td style="text-align:right; width: 115px;"><? echo $part_time_a;?></td>
								<td style="text-align:center; width: 115px;"><? echo $part_time_a_placar;?></td>
								<td align="center" class="dados-tabelas">x</td>
								<td style="text-align:center ;width: 115px;"><? echo $part_time_b_placar;?></td>
								<td style="text-align:left; width: 115px;"><? echo $part_time_b;?></td>
							</tr>
						</table>
					</td>
				</tr>
				<?php
				}
			?>
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
						<a href="index.php?tabela=escolherTimeLibertadores&acao=escolherTimeLibertadores&usercod=<? echo $codigo;?>">
							Escolher time da libertadores
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarFotoUsuarios&acao=formularioAlterarFotoUsuarios&usercod=<? echo $codigo;?>">
							Alterar Foto
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarMusicaLibertadores&acao=formularioAlterarMusicaLibertadores&usercod=<? echo $codigo;?>">
							Alterar M&uacute;sica
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