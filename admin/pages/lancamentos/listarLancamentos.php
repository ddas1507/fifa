<style>tr:nth-of-type(2n+0){background:#ccc;}</style>
<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Lancamentos Cadastrados</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</form>	
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<tr>
			<td align="center" style="background-color:#eee; color:#555;">Data</td>
			<td align="left" style="background-color:#eee; color:#555;">Descri&ccedil;&atilde;o</td>
			<td align="center" style="background-color:#eee; color:#555;">Valor</td>
		</tr>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$lanccod = $oquefazer->registros->LANC_CODIGO;
					$nome	= $oquefazer->registros->LANC_NOME;
					$valor	= $oquefazer->registros->LANC_VALOR;			
					$dtcad	= $oquefazer->registros->LANC_DTCAD;
					$dtalt	= $oquefazer->registros->LANC_DTALT;		
			?>
		<tr>
			<td align="center" class="dados-tabelas"><? echo $dtcad;?></td>
			<td align="left" class="dados-tabelas"><? echo $nome;?></td>
			<td align="center" class="dados-tabelas">
			<?
					if($valor > 0){
						echo 'R$ '.$valor;
					}
					else{
						echo '<label style=color:#f00; >R$ '.number_format($valor,2,",",".").'</label>';
					}
			?>
			</td>
		</tr>
			<?php
			}
		?>
		<tr><td colspan="4" align="left">&nbsp;</td></tr>
		<tr style="background-color:#eee;"><td colspan="4" align="left">Lan&ccedil;amentos</td></tr>
		<tr><td colspan="4" align="left">&nbsp;</td></tr>
		<tr style="background-color:#eee;">
			<td colspan="2" align="left">Total de cr&eacute;ditos</td>
			<td colspan="1" align="center">
				<?php 
					$valorCreditos = $oquefazer->totalDeCreditosCadastrados();
					
					echo 'R$ '. number_format($valorCreditos,2,",",".");
				?>
			</td>
		</tr>		
		<tr style="background-color:#eee;">
			<td colspan="2" align="left">Total d&eacute;bitos</td>
			<td colspan="1" align="center">
				<?php 
					$valorDebitos = $oquefazer->totalDeDebitosCadastrados();
					
					echo 'R$ '. number_format($valorDebitos,2,",",".");
				?>
			</td>
		</tr>		
		<tr style="background-color:#eee;">
			<td colspan="2" align="left">Saldo dispon&iacute;vel</td>
			<td colspan="1" align="center">
				<?php 
					$valorCreditos = $oquefazer->totalDeCreditosCadastrados();
					$valorDebitos = $oquefazer->totalDeDebitosCadastrados();

					$cred = $valorCreditos;
					$debt = $valorDebitos;
					
					$valorSaldo = $cred - $debt;
					
					if($valorSaldo > 1){
						//echo 'R$ '. number_format($valorSaldo,2,",",".");
						echo 'R$ '.$valorSaldo;
					}
					else{
						//echo '<label style=color:#f00;>R$ '.number_format($valorSaldo,2,",",".").'</label>';
						echo '<label style=color:#f00;>R$ '.number_format($valorSaldo,2,",",".").'</label>';
					}
				?>
			</td>
		</tr>		
	</table>
</div>