<?php
	$usercod = $_REQUEST['usercod'];
?>
<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Clubes Cadastrados</li>
					</ul>
				</div>
			</td>
			
			<td align="right">
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>						
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Inserir" name="Inserir" title="Novo Clube" 
				/>
				<input type="hidden" value="formularioCadastrarClubes" name="tabela"/>
				<input type="hidden" value="formularioCadastrarClubes" name="acao"/>		
				<?
				}
				else{
				
				}
				?>
			</td>
		</tr>
	</table>
</form>	
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$clubcod = $oquefazer->registros->CLUBE_CODIGO;
					$nome	= $oquefazer->registros->CLUBE_NOME;
					$img	= $oquefazer->registros->CLUBE_IMG;					
					$dtcad	= $oquefazer->registros->CLUBE_DTCAD;
					$dtalt	= $oquefazer->registros->CLUBE_DTALT;		
			?>
			<a href="index.php?tabela=selecionarClubeLibertadores&acao=selecionarClubeLibertadores&usercod=<? echo $usercod;?>&clubcod=<? echo $clubcod;?>&clubnome=<? echo $nome;?>&clubimg=<? echo $img;?>">
			<div id="div-bloco-perfil" >
				<div class="div-bloco-perfil-nome">
					<? echo $nome;?>
				</div>
				<div class="div-bloco-perfil-foto">
					<img src="images/clubes/<?php echo $img;?>" border="0" width="128px"/>
				</div>
			</div>
			</a>
					
				<?php
				}
			?>
	</table>
</div>