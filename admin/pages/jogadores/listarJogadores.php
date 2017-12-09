<style type="text/css">
.bloco-cpanel{font-size: 10px; margin: 4px; width: 35px; text-align:center;
border: 1px solid #ccc;
background: #eee;
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #eeeeee 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #eeeeee 0%,#ffffff 100%);
background: -o-linear-gradient(top, #eeeeee 0%,#ffffff 100%);	
background: -ms-linear-gradient(top, #eeeeee 0%,#ffffff 100%);
background: linear-gradient(top, #eeeeee 0%,#ffffff 100%);
}
</style>

<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Jogadores Cadastrados</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</form>	
</form>	
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th align="center">Foto</th>
				<th align="center">Nome</th>
				<th align="center">Posi&ccedil;&atilde;o</th>
				<th align="center">Habilidade</th>
				<th align="center">Valor</th>
				<th align="center">Gols</th>
				<th align="center">Clube</th>
				<th align="center">Cart&atilde;o Amarelo</th>
				<th align="center">Cart&atilde;o Vermelho</th>
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>
				<th align="center">Painel de Controle</th>
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
					$ca	= $oquefazer->registros->JOGADOR_C_A;					
					$cv	= $oquefazer->registros->JOGADOR_C_V;					
					$gols	= $oquefazer->registros->JOGADOR_GOLS;
					$dtcad	= $oquefazer->registros->JOGADOR_DTCAD;
					$dtalt	= $oquefazer->registros->JOGADOR_DTALT;
					
/*					if($posicao == 'g'){$funcao ='<label style="font-weight:bold; color:#f90;">Goleiro</label>';}
					if($posicao == 'l'){$funcao = '<label style="font-weight:bold; color:#ff0;">Lateral</label>';}
					if($posicao == 'z'){$funcao = '<label style="font-weight:bold; color:#ff0;">Zagueiro</label>';}
					if($posicao == 'v'){$funcao = '<label style="font-weight:bold; color:#093;">Volante</label>';}
					if($posicao == 'm'){$funcao = '<label style="font-weight:bold; color:#093;">Meia</label>';}
					if($posicao == 'a'){$funcao = '<label style="font-weight:bold; color:#039;">Atacante</label>';}*/
					
					if($posicao == 'g'){$funcao ='<label style="font-weight:normal; color:#000;">Goleiro</label>';}
					if($posicao == 'l'){$funcao = '<label style="font-weight:normal; color:#000;">Lateral</label>';}
					if($posicao == 'z'){$funcao = '<label style="font-weight:normal; color:#000;">Zagueiro</label>';}
					if($posicao == 'v'){$funcao = '<label style="font-weight:normal; color:#000;">Volante</label>';}
					if($posicao == 'm'){$funcao = '<label style="font-weight:normal; color:#000;">Meia</label>';}
					if($posicao == 'a'){$funcao = '<label style="font-weight:normal; color:#000;">Atacante</label>';}
					
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
					<td align="center">
						<?
							echo 'R$ '. number_format($valor,2,",",".");
						?>
					</td>
					<td align="center"><? echo $gols;?></td>					
					<td align="center"><? echo $clubNome;?></td>					
					<td align="center"><? echo $ca;?></td>
					<td align="center"><? echo $cv;?></td>					
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>
					<td class="dados-tabelas" align="center">
						<table border="0" style="border-collapse:collapse;">
							<tr>
								<td class="bloco-cpanel">Editar</td>
								<td class="bloco-cpanel">Foto</td>
								<td class="bloco-cpanel">GOL</td>
								<td class="bloco-cpanel">A.C.A</td>
								<td class="bloco-cpanel">A.C.V</td>
								<td class="bloco-cpanel">Z.C.A</td>
								<td class="bloco-cpanel">Z.C.V</td>
								<td class="bloco-cpanel">Excluir</td>
							</tr>
							<tr>
								<td class="bloco-cpanel">
									<a href="index.php?tabela=formularioAlterarJogadores&acao=formularioAlterarJogadores&jogadcod=<? echo $jogadcod;?>">
										<img src="images/others/update.png" border="0" width="24px" title="Alterar Cadastro" alt="Alterar Cadastro"/>
									</a>
								</td>
								<td class="bloco-cpanel">
									<a href="index.php?tabela=formularioAlterarFotoJogadores&acao=formularioAlterarFotoJogadores&jogadcod=<? echo $jogadcod;?>">
										<img src="images/others/imagem.png" border="0" width="24px" title="Alterar Foto" alt="Alterar Foto"/>
									</a>
								</td>
								<td class="bloco-cpanel">
									<a href="index.php?tabela=somarGol&acao=somarGol&jogadcod=<? echo $jogadcod;?>&nome=<? echo $nome;?>">
										<img src="images/others/gol.gif" border="0" width="24px" title="GOL" alt="GOL"/>
									</a>
								</td>								
								<td class="bloco-cpanel">
									<a href="index.php?tabela=somarCartaoAmareloIndividual&acao=somarCartaoAmareloIndividual&jogadcod=<? echo $jogadcod;?>&nome=<? echo $nome;?>">
										<img src="images/others/cartao_amarelo.png" border="0" width="24px" title="Aplicar Cartao Amarelo" alt="Cartao Amarelo"/>
									</a>
								</td>
								<td class="bloco-cpanel">
									<a href="index.php?tabela=somarCartaoVermelhoIndividual&acao=somarCartaoVermelhoIndividual&jogadcod=<? echo $jogadcod;?>&nome=<? echo $nome;?>">
										<img src="images/others/cartao_vermelho.png" border="0" width="24px" title="Aplicar Cartao Vermelho" alt="Cartao Amarelo"/>
									</a>
								</td>
								<td class="bloco-cpanel">
									<a href="index.php?tabela=zerarCartoesAmarelosindividuais&acao=zerarCartoesAmarelosindividuais&jogadcod=<? echo $jogadcod;?>&nome=<? echo $nome;?>">
										<img src="images/others/reset.gif" border="0" width="24px" title="Zerar Cartoes Amarelos" alt="Zerar Cartoes Amarelo"/>
									</a>
								</td>
								<td class="bloco-cpanel">
									<a href="index.php?tabela=zerarCartoesVermelhosindividuais&acao=zerarCartoesVermelhosindividuais&jogadcod=<? echo $jogadcod;?>&nome=<? echo $nome;?>">
										<img src="images/others/reset.gif" border="0" width="24px" title="Zerar Cartoes Vermelhos" alt="Zerar Cartoes Amarelo"/>
									</a>
								</td>
								<td class="bloco-cpanel">
									<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o Jogador abaixo?\n\nCodigo: <?php echo $jogadcod;?>\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirJogadores&acao=excluirJogadores&jogadcod=<? echo $jogadcod;?>';}">
										<img src="images/others/delete.png" border="0" width="24px" title="Excluir Jogador" alt="Excluir Jogador" />
									</a>
								</td>
							</tr>
						</table>
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