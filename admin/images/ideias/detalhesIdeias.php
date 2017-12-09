<?php
	$codigo	= $oquefazer->registros->IDEIA_CODIGO;
	$nome		= $oquefazer->registros->IDEIA_NOME;
	$gostei	= $oquefazer->registros->IDEIA_GOSTEI;
	$naogostei = $oquefazer->registros->IDEIA_NAOGOSTEI;	
	$assunto	= $oquefazer->registros->IDEIA_ASSUNTO;
	$mensagem	= $oquefazer->registros->IDEIA_MENSAGEM;
	$dtcad	= $oquefazer->registros->IDEIA_DTCAD;
	$dtalt	= $oquefazer->registros->IDEIA_DTALT;
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
						<form name="btGravar" action="index.php?tabela=votarGosteiIdeias&acao=votarGosteiIdeias&codigo=<? echo $codigo;?>" method="post">
							<input 
								class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
								type="submit" value="Gostei" 
							/>
						</form>									
					</td>
					<td>
						<form name="btDetalhes" action="index.php?tabela=votarNaoGosteiIdeias&acao=votarNaoGosteiIdeias&codigo=<? echo $codigo;?>" method="post">
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