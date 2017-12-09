<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Debitos Cadastrados</li>
					</ul>
				</div>
			</td>
			
			<td align="right">
				<?php
				$nome = $_SESSION['sessao_nome_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($nome == 'Kaka' )||($nivel == 1)){?>						
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" title="Novo Debito" 
				/>
				<input type="hidden" value="formularioCadastrarDebitos" name="tabela"/>
				<input type="hidden" value="formularioCadastrarDebitos" name="acao"/>		
				<?
				}
				else{
				
				}
				?>
			</td>
		</tr>
	</table>
</form>	
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<tr>
			<td align="center" style="background-color:#efefef; color:#555;">Data</td>
			<td align="center" style="background-color:#efefef; color:#555;">Descri&ccedil;&atilde;o</td>
			<td align="center" style="background-color:#efefef; color:#555;">Valor</td>
			<td align="center" style="background-color:#efefef; color:#555;">Altera&ccedil;&atilde;o</td>
			<td align="center" style="background-color:#efefef; color:#555;">Detalhes</td>
		</tr>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$debtcod = $oquefazer->registros->DEBT_CODIGO;
					$nome	= $oquefazer->registros->DEBT_NOME;
					$valor	= $oquefazer->registros->DEBT_VALOR;
					$img	= $oquefazer->registros->DEBT_IMG;					
					$dtcad	= $oquefazer->registros->DEBT_DTCAD;
					$dtalt	= $oquefazer->registros->DEBT_DTALT;		
			?>
		<tr>
			<td align="center" class="dados-tabelas"><? echo $dtcad;?></td>
			<td align="center" class="dados-tabelas"><? echo $nome;?></td>
			<td align="center" class="dados-tabelas"><? echo 'R$ '. number_format($valor,2,",",".");?></td>
			<td align="center" class="dados-tabelas"><? echo $dtalt;?></td>
			<td align="center" class="dados-tabelas"><a href="index.php?tabela=detalhesDebitos&acao=detalhesDebitos&debtcod=<? echo $debtcod;?>">Ver</a></td>
		</tr>
			<?php
			}
		?>
		</tr>
		<td colspan="5">&nbsp;
		</td>
		</tr>
		<tr style="background-color:#efefef;">
			<td colspan="4" align="left">Total d&eacute;bitos</td>
			<td colspan="1" align="left">
				<?php 
					$valorDebitos = $oquefazer->totalDeDebitosCadastrados();
					
					echo 'R$ '. number_format($valorDebitos,2,",",".");
				?>
			</td>
		</tr>
	</table>
</div>