<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Usu&aacute;rios Cadastrados</li>
					</ul>
				</div>
			</td>
			
			<td align="right">
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>						
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" title="Novo usu&aacute;rio" 
				/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="tabela"/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="acao"/>		
				<?
				}
				else{
				
				}
				?>
			</td>
		</tr>
	</table>
</form>	
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Foto</th>
				<th class="titulo-tabelas">N&iacute;vel</th>
				<th class="titulo-tabelas">Nome</th>
				<th class="titulo-tabelas">Perfil</th>
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>						
				<td class="titulo-tabelas">Editar</td>
				<?
				}
				else{
				
				}
				?>						
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>				
				<th class="titulo-tabelas">Excluir</th>
				<?
				}
				else{
				
				}
				?>				
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$usercod = $oquefazer->registros->USUARIO_CODIGO;
					$cargo	= $oquefazer->registros->USUARIO_NIVEL;
					$nome	= $oquefazer->registros->USUARIO_NOME;
					$img	= $oquefazer->registros->USUARIO_IMG;					
					$snome	= $oquefazer->registros->USUARIO_SNOME;
					$dtcad	= $oquefazer->registros->USUARIO_DTCAD;
					$dtalt	= $oquefazer->registros->USUARIO_DTALT;
			?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td align="center"><img src="images/usuarios/<?php echo $img;?>" border="0" width="20px"/></td>
					<td class="dados-tabelas">
					<?
					if($cargo == 1)
						echo 'Administrador';
					else
						echo 'Usu&aacute;rio';
					?>
					</td>
					<td class="dados-tabelas"><? echo $nome.' '.$snome;?></td>
					
					<td class="dados-tabelas">
						<a href="index.php?tabela=detalhesUsuarios&acao=detalhesUsuarios&usercod=<? echo $usercod;?>">
							<img src="images/others/view.png" border="0" width="24px">
						</a>
					</td>
					<?php
					$nivel = $_SESSION['sessao_nivel_usuario'];
					if($nivel == 1){?>
						<td class="dados-tabelas">
							<a href="index.php?tabela=formularioAlterarUsuarios&acao=formularioAlterarUsuarios&usercod=<? echo $usercod;?>">
								<img src="images/others/update.png" border="0" width="24px">
							</a>
						</td>
					<?
					}
					else{?>
					<?
					}
					?>						
					<?php
					$nivel = $_SESSION['sessao_nivel_usuario'];
					if($nivel == 1){?>
						<td class="dados-tabelas">
							<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nUsuario: <?php echo $nome.' '.$snome;?>')) {location='index.php?tabela=excluirUsuarios&acao=excluirUsuarios&usercod=<? echo $usercod;?>';}">
								<img src="images/others/delete.png" border="0" width="24px">
							</a>
						</td>
					<?
					}
					else{?>
					<?
					}
					?>
				</tr>
				<?php
				} ?>				
		</tbody>
	</table>
</div>