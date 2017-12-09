<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Creditos Cadastrados</li>
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
					type="submit" value="Inserir" name="Inserir" title="Novo Credito" 
				/>
				<input type="hidden" value="formularioCadastrarCreditos" name="tabela"/>
				<input type="hidden" value="formularioCadastrarCreditos" name="acao"/>		
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
			<td align="center" style="background-color:#efefef; color:#555;">Ultima Altera&ccedil;&atilde;o</td>
			<td align="center" style="background-color:#efefef; color:#555;">Detalhes</td>
		</tr>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$credcod = $oquefazer->registros->CRED_CODIGO;
					$nome	= $oquefazer->registros->CRED_NOME;
					$valor	= $oquefazer->registros->CRED_VALOR;			
					$dtcad	= $oquefazer->registros->CRED_DTCAD;
					$dtalt	= $oquefazer->registros->CRED_DTALT;		
			?>
		<tr>
			<td align="center" class="dados-tabelas"><? echo $dtcad;?></td>
			<td align="center" class="dados-tabelas"><? echo $nome;?></td>
			<td align="center" class="dados-tabelas"><? echo 'R$ '. number_format($valor,2,",",".");?></td>
			<td align="center" class="dados-tabelas"><? echo $dtalt;?></td>
			<td align="center" class="dados-tabelas"><a href="index.php?tabela=detalhesCreditos&acao=detalhesCreditos&credcod=<? echo $credcod;?>">Ver</a></td>
		</tr>
			<?php
			}
		?>
		</tr>
		<td colspan="5">&nbsp;
		</td>
		</tr>
		<tr style="background-color:#efefef;">
			<td colspan="4" align="left">Total de cr&eacute;ditos</td>
			<td colspan="1" align="left">
				<?php 
					$valorCreditos = $oquefazer->totalDeCreditosCadastrados();
					
					echo 'R$ '. number_format($valorCreditos,2,",",".");
				?>
			</td>
		</tr>
	</table>
</div>