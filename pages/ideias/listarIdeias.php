<div id="corpo-tabela">
<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul style="border-top: 0px solid #069;">
						<li>Consultar Ideias</li>
					</ul>
				</div>
			</td>
			<td align="right">
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" title="inserir novo registro" 
				/>
				<input type="hidden" value="formularioCadastrarIdeias" name="tabela"/>
				<input type="hidden" value="formularioCadastrarIdeias" name="acao"/>			
			</td>
		</tr>
	</table>
</form>	
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas" title="Classificar por nome" >Nome</th>
				<th class="titulo-tabelas" title="Classificar por assunto">Assunto</th>
				<th class="titulo-tabelas" title="Classificar por gostei">Gostei</th>
				<th class="titulo-tabelas" title="Classificar por n&atilde;o gostei">N&atilde;o Gostei</th>
				<th class="titulo-tabelas" title="Classificar por data de cadastro">Data de Cadastro</th>
				<th class="titulo-tabelas" title="Op&ccedil;&atilde;o">Visualizar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
			{
				$codigo	= $oquefazer->registros->IDEIA_CODIGO;
				$gostei	= $oquefazer->registros->IDEIA_GOSTEI;
				$naogostei = $oquefazer->registros->IDEIA_NAOGOSTEI;
				$nome	= $oquefazer->registros->IDEIA_NOME;
				$assunto	= $oquefazer->registros->IDEIA_ASSUNTO;
				$dtcad	= $oquefazer->registros->IDEIA_DTCAD;
			?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome;?></td>
					<td class="dados-tabelas"><? echo $assunto;?></td>
					<td class="dados-tabelas"><? echo $gostei;?></td>
					<td class="dados-tabelas"><? echo $naogostei;?></td>					
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					
					<td class="dados-tabelas">
						<a href="index.php?tabela=detalhesIdeias&acao=detalhesIdeias&codigo=<? echo $codigo;?>">
							<img src="admin/images/others/view.png" border="0" width="24px" title="Visualizar o conte&uacute;do completo " >
						</a>
					</td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>