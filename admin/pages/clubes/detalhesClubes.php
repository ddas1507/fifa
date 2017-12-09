<?php
	$clubcod	= $oquefazer->registros->CLUBE_CODIGO;
	$clubnome	= $oquefazer->registros->CLUBE_NOME;
	$img	= $oquefazer->registros->CLUBE_IMG;	
	$dtcad	= $oquefazer->registros->CLUBE_DTCAD;
	$dtalt	= $oquefazer->registros->CLUBE_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Clubes</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarClubes&acao=listarClubes">Consultar Clubes</a></b></li>
					<li>></li>
					<li>Perfil de <?php echo $clubnome;?></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td valign="top">
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/clubes/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
				</tr>
					<td align="center">
						<a href="index.php?tabela=formularioAlterarFotoClubes&acao=formularioAlterarFotoClubes&clubcod=<? echo $clubcod;?>">Alterar Foto</a>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $clubcod;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $clubnome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
		<td valign="top">
			<table style="width:100%;">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($clubcod == $codigoUser)||($nivel == 1)){?>
				<tr>
					<td align="right" class="div-bloco-perfil-nome">Opc&otilde;es de Conta</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarFotoClubes&acao=formularioAlterarFotoClubes&clubcod=<? echo $clubcod;?>">Alterar Foto</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioAlterarClubes&acao=formularioAlterarClubes&clubcod=<? echo $clubcod;?>">
							Editar Cadastro
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="index.php?tabela=formularioCadastrarJogadores&acao=formularioCadastrarJogadores&clubcod=<? echo $clubcod;?>&clubnome=<? echo $clubnome;?>">
							Adicionar Jogador
						</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o clube?\n\nUsuario: <?php echo $clubnome.' '.$snome;?>')) {location='index.php?tabela=excluirClubes&acao=excluirClubes&clubcod=<? echo $clubcod;?>';}">
							Excluir Clube
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
	<tr>
		<td colspan="3">
			<div id="corpo-tabela">
				<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
					<thead>	
						<tr>
							<th align="center">Foto</th>
							<th align="center">Nome</th>
							<th align="center">Posi&ccedil;&atilde;o</th>
							<th align="center">Habilidade</th>
							<th align="center">Valor</th>
							<?php
							$nivel = $_SESSION['sessao_nivel_usuario'];
							if($nivel == 1){?>						
							<th align="center" colspan="3">Opc&otilde;es</th>
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
								$clubNome = $oquefazer->registros->CLUBE_NOME;
								$clubcod = $oquefazer->registros->CLUBE_CODIGO;
								$jogadcod = $oquefazer->registros->JOGADOR_CODIGO;
								$nome	= $oquefazer->registros->JOGADOR_NOME;
								$posicao	= $oquefazer->registros->JOGADOR_POSICAO;
								$habilidade	= $oquefazer->registros->JOGADOR_HABILIDADE;
								$img	= $oquefazer->registros->JOGADOR_IMG;					
								$dtcad	= $oquefazer->registros->JOGADOR_DTCAD;
								$dtalt	= $oquefazer->registros->JOGADOR_DTALT;
								
								if($posicao == 'g'){$funcao ='<label style="font-weight:bold; color:#f90;">Goleiro</label>';}
								if($posicao == 'l'){$funcao = '<label style="font-weight:bold; color:#ff0;">Laterais</label>';}
								if($posicao == 'z'){$funcao = '<label style="font-weight:bold; color:#ff0;">Zagueiros</label>';}
								if($posicao == 'v'){$funcao = '<label style="font-weight:bold; color:#093;">Volantes</label>';}
								if($posicao == 'm'){$funcao = '<label style="font-weight:bold; color:#093;">Meias</label>';}
								if($posicao == 'a'){$funcao = '<label style="font-weight:bold; color:#039;">Atacantes</label>';}
								
								if($habilidade >= 6.0 | $habilidade < 7.0){
									$valor = $habilidade * 1;
								}
								if($habilidade >= 7.0 || $habilidade < 8.0){
									$valor = $habilidade * 1;
								}
								if($habilidade >= 8.0 || $habilidade <= 9.0){
									$valor = $habilidade * 1;
								}
								if($habilidade > 9.0){
									$valor = $habilidade * 1;
								}					
						?>
							<tr>
								<td align="center"><img src="images/jogadores/<?php echo $img;?>" border="0" width="64px"/></td>
								<td align="center"><? echo $nome;?></td>
								<td align="center"><? echo $funcao;?></td>
								<td align="center"><? echo $habilidade;?></td>
								<td align="left">
									<?
										echo 'R$ '. number_format($valor,2,",",".");
									?>
								</td>
							<?php
							$nivel = $_SESSION['sessao_nivel_usuario'];
							if($nivel == 1){?>						
								<td class="dados-tabelas">
									<a href="index.php?tabela=formularioAlterarJogadores&acao=formularioAlterarJogadores&jogadcod=<? echo $jogadcod;?>">
										<img src="images/others/update.png" border="0" width="24px">
									</a>
								</td>
								<td class="dados-tabelas">
									<a href="index.php?tabela=formularioAlterarFotoJogadores&acao=formularioAlterarFotoJogadores&&jogadcod=<? echo $jogadcod;?>">
										<img src="images/others/imagem.png" border="0" width="24px">
									</a>
								</td>
								<td class="dados-tabelas">
									<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o Jogador abaixo?\n\nCodigo: <?php echo $clicod;?>\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirJogadores&acao=excluirJogadores&jogadcod=<? echo $jogadcod;?>';}">
										<img src="images/others/delete.png" border="0" width="24px">
									</a>
								</td>	
							<?
							}
							else{
							
							}
							?>					
						
							</tr>
								
							<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</td>
	</tr>
</table>