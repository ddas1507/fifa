<?php $torneio = $_REQUEST['torneio'];?>
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
						<li>Registre o N&uacute;mero da Rodada</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<table width="55%" align="center">
					<form action="index.php?tabela=formularioCadastrarPartidasp2&acao=formularioCadastrarPartidasp2" method="post" enctype="multipart/form-data">
						<tr>
							<td><b>Torneio:</b></td>
							<td><input type="text" name="part_torneio" id="part_torneio" size="30px" value="<?if($torneio == 1){echo 'Copa Libertadores';}else{echo 'Champions League';}?>" readonly="readonly" /></td>
							<td><b>N&uacute;mero da Rodada:</b></td>
							<td>
								<select name="part_rodada" id="part_rodada">
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
									<option value="06">6</option>
									<option value="07">7</option>
									<option value="08">8</option>
									<option value="09">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
								</select>
							</td>
							<td>
							<input 
								class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
								type="submit" value="Avancar" name="Avancar"
							/>						
							<input type="hidden" value="<? echo $torneio;?>" name="part_torneio"/>
							</td>
						</tr>
					</form>
				</table>
			</td>
		</tr>
	</table>