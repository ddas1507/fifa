<div id="corpo-tabela">
<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul style="border-top: 0px solid #069;">
						<li>Consultar Regulamento</li>
					</ul>
				</div>
			</td>
			<td align="right">
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" 
				/>
				<input type="hidden" value="formularioCadastrarRegulamento" name="tabela"/>
				<input type="hidden" value="formularioCadastrarRegulamento" name="acao"/>			
			</td>
		</tr>
	</table>
</form>	
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
			{
				$codigo	= $oquefazer->registros->REG_CODIGO;
				$nome	= $oquefazer->registros->REG_NOME;
				$assunto	= $oquefazer->registros->REG_ASSUNTO;
				$mensagem	= $oquefazer->registros->REG_MENSAGEM;
				$dtcad	= $oquefazer->registros->REG_DTCAD;
				$dtalt	= $oquefazer->registros->REG_DTALT;
			?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas">
						<table>
							<?php
							$nivel = $_SESSION['sessao_nivel_usuario'];
							if($nivel == 1){?>
							<tr>
							<td style="float:left;" align="left" colspan="3" class="dados-tabelas">
								<a href="index.php?tabela=formularioAlterarRegulamento&acao=formularioAlterarRegulamento&codigo=<? echo $codigo;?>">
									<img src="images/others/update.png" border="0" width="24px" title="Alterar Dados" alt="Alterar Dados"/>
								</a>&nbsp;
								<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o Regulamento abaixo?\n\nTitulo: <?php echo $nome;?>')) {location='index.php?tabela=excluirRegulamento&acao=excluirRegulamento&codigo=<? echo $codigo;?>';}">
									<img src="images/others/delete.png" border="0" width="24px" title="Deletar" alt="Deletar" />
								</a>
							</td>
							</tr>
							<?
							}
							else{

							}
							?>							
							<tr>
								<td style="float:left;"><b>T&iacute;tulo: </b><? echo $nome;?></td>
								<td style="float:right;"><b>Cadastrado em: </b><? echo $dtcad;?></td>
								<td style="float:right;"><b>Ultima Altera&ccedil;&atilde;o: <? echo $dtalt;?></b></td>
							</tr>
							<tr><td style="float:left;" align="left" colspan="3" class="dados-tabelas"><b>Item: </b><? echo $assunto;?></td></tr>
							<tr><td style="float:left;" align="left" colspan="3" class="dados-tabelas">&nbsp;</td></tr>
							<tr><td style="float:left; text-align:justify;" align="left" colspan="3" class="dados-tabelas"><? echo $mensagem;?></td></tr>
							<tr><td style="float:left;" align="left" colspan="3" class="dados-tabelas">&nbsp;</td></tr>
							<tr><td style="float:left;" align="left" colspan="3" class="dados-tabelas">&nbsp;</td></tr>
						</table>
					</td>
					<!--td class="dados-tabelas">
						<a href="index.php?tabela=detalhesRegulamento&acao=detalhesRegulamento&codigo=<?// echo $codigo;?>">
							<img src="images/others/view.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarRegulamento&acao=formularioAlterarRegulamento&codigo=<? //echo $codigo;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=excluirRegulamento&acao=excluirRegulamento&codigo=<?// echo $codigo;?>">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td-->
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>