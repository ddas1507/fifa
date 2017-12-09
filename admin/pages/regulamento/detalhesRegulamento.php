<?php
	$codigo	= $oquefazer->registros->REG_CODIGO;
	$nome		= $oquefazer->registros->REG_NOME;
	$assunto	= $oquefazer->registros->REG_ASSUNTO;
	$mensagem	= $oquefazer->registros->REG_MENSAGEM;
	$dtcad	= $oquefazer->registros->REG_DTCAD;
	$dtalt	= $oquefazer->registros->REG_DTALT;
?>
<table border="0" width="100%">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul style="border-top: 0px solid #069;">
					<li>Visualizar</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<table align="right">
				<tr>
					<td>
						<form name="btGravar" action="index.php?tabela=votarGosteiRegulamento&acao=votarGosteiRegulamento&codigo=<? echo $codigo;?>" method="post">
							<input 
								class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
								type="submit" value="Gostei" 
							/>
						</form>									
					</td>
					<td>
						<form name="btDetalhes" action="index.php?tabela=votarNaoGosteiRegulamento&acao=votarNaoGosteiRegulamento&codigo=<? echo $codigo;?>" method="post">
							<input 
								class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
								type="submit" value="N&atilde;o Gostei" 
							/>
						</form>									
					</td>			
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<table width="100%">
				<tr>
					<td style=" width: 12%; "><label class="labels-l">Nome:</label></td>
					<td><label class="dados-r"><? echo $nome;?></label></td>
				</tr>
				<tr>
					<td style=" width: 12%; "><label class="labels-l">Cadastrado em:</label></td>
					<td><label class="dados-r"><? echo $dtcad;?></label></td>
				</tr>
				<tr>
					<td style=" width: 12%; "><label class="labels-l">Alterado em:</label></td >
					<td ><label class="dados-r"><? echo $dtalt;?></label></td>
				</tr>
				<tr>
					<td style=" width: 12%; "><label class="labels-l">Assunto:</label></td>
					<td ><label class="labels-r"><? echo $assunto;?></label></td>
				</tr>
				<tr>
					<td style=" width: 12%; " valign="top" ><label class="labels-l">Mensagem:</label></td>
					<td ><label class="labels-r"><? echo $mensagem;?></label></td>
				</tr>
			</table>
		</td>
	</tr>
</table>