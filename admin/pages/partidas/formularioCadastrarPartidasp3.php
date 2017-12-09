<?php $torneio = $_REQUEST['part_torneio'];?>
<?php $rodada = $_REQUEST['part_rodada'];?>
<?php $usuario_mandante_cod = $_REQUEST['usuario_mandante_cod'];?>
<?php $usuario_mandante_nome = $_REQUEST['usuario_mandante_nome'];?>
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Partidas</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarPartidas&acao=listarPartidas">Consultar Partidas Cadastradas</a></b><li>
						<li>></li>
						<li>Cadastrar Nova Partida</li>
						<li>></li>
						<li>Selecione o Time Visitante</li>						
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
			
				<table width="25%" align="center">
					<form method="post" enctype="multipart/form-data">				
						<tr><td><b>Torneio:</b> <?if($torneio == 1){echo 'Copa Libertadores';}else{echo 'Champions League';}?></td></tr>
						<tr><td><b>N&uacute;mero da Rodada:</b> <? echo $rodada;?></td></tr>
						<tr><td><b>Time Mandante:</b> <? echo $usuario_mandante_nome;?></td></tr>
						<tr><td><b>Selecione o Time Visitante:</b></td></tr> 
						<tr>
							<td>
								<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
									<tbody>
										<?php
										while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
										{
											$usuario_visitante_cod	= $oquefazer->registros->USUARIO_CODIGO	;
											$usuario_visitante_nome	= $oquefazer->registros->USUARIO_NOME;
											
										?>
											<tr onclick="location.href = 'index.php?tabela=formularioCadastrarPartidasp4&acao=formularioCadastrarPartidasp4&part_torneio=<? echo $torneio;?>&part_rodada=<? echo $rodada;?>&usuario_mandante_cod=<? echo $usuario_mandante_cod;?>&usuario_mandante_nome=<? echo $usuario_mandante_nome;?>&usuario_visitante_cod=<? echo $usuario_visitante_cod;?>&usuario_visitante_nome=<? echo $usuario_visitante_nome;?>';" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
												<td class="dados-tabelas">
													<? echo $usuario_visitante_nome;?>
												</td>
											</tr>
										<?php 
										} ?>
									</tbody>
								</table>
							</td>
						</tr>
					</form>
				</table>
			</td>
		</tr>
	</table>