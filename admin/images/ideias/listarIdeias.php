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
					type="submit" value="Inserir" name="Inserir" 
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
				<th class="titulo-tabelas">Nome</th>
				<th class="titulo-tabelas">Gostei</th>
				<th class="titulo-tabelas">N&atilde;o Gostei</th>
				<th class="titulo-tabelas">Assunto</th>
				<th class="titulo-tabelas">Data de Cadastro</th>
				<th class="titulo-tabelas">Visualizar</th>
				<th class="titulo-tabelas">Atualizar</th>
				<th class="titulo-tabelas">Excluir</th>
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
					<td class="dados-tabelas"><? echo $gostei;?></td>
					<td class="dados-tabelas"><? echo $naogostei;?></td>
					<td class="dados-tabelas"><? echo $assunto;?></td>
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					
					<td class="dados-tabelas">
						<a href="index.php?tabela=detalhesIdeias&acao=detalhesIdeias&codigo=<? echo $codigo;?>">
							<img src="images/others/view.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarIdeias&acao=formularioAlterarIdeias&codigo=<? echo $codigo;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=excluirIdeias&acao=excluirIdeias&codigo=<? echo $codigo;?>">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>