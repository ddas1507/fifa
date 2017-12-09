<?php $torneio = $_REQUEST['part_torneio'];?>
<?php $rodada = $_REQUEST['part_rodada'];?>
<?php $usuario_mandante_cod = $_REQUEST['usuario_mandante_cod'];?>
<?php $usuario_visitante_cod = $_REQUEST['usuario_visitante_cod'];?>
<?php $usuario_mandante_nome = $_REQUEST['usuario_mandante_nome'];?>
<?php $usuario_visitante_nome = $_REQUEST['usuario_visitante_nome'];?>
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
						<li>Confirmar Partida</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<table width="25%" align="center">
					<form action="index.php?tabela=gravarPartidas&acao=gravarPartidas" method="post" enctype="multipart/form-data">				
						<tr><td><b>Torneio:</b> <?if($torneio == 1){echo 'Copa Libertadores';}else{echo 'Champions League';}?></td></tr>
						<tr><td><b>N&uacute;mero da Rodada:</b> <? echo $rodada;?></td></tr>
						<tr><td><b>Time Mandante:</b> <? echo $usuario_mandante_nome;?></td></tr>
						<tr><td><b>Time Visitante:</b> <? echo $usuario_visitante_nome;?></td></tr>
						<tr>				
							<td>
							<input 
								class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
								type="submit" value="Salvar" name="Registrar"
							/>							
							<input type="hidden" value="gravarPartidas" name="tabela"/>
							<input type="hidden" value="gravarPartidas" name="acao"/>
							<input type="hidden" value="<? echo $torneio;?>" name="part_torneio"/>
							<input type="hidden" value="<? echo $rodada;?>" name="part_rodada"/>
							<input type="hidden" value="<? echo $usuario_mandante_cod;?>" name="usuario_mandante_cod"/>
							<input type="hidden" value="<? echo $usuario_visitante_cod;?>" name="usuario_visitante_cod"/>
							<input type="hidden" value="<? echo $usuario_mandante_nome;?>" name="usuario_mandante_nome"/>
							<input type="hidden" value="<? echo $usuario_visitante_nome;?>" name="usuario_visitante_nome"/>							
							</td>
						</tr>
					</form>
				</table>
			</td>
		</tr>
	</table>