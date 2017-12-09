			<? echo $rodada.'&ordf;';?>RODADA
			Data: <? echo $dia.'/'.$mes.'/'.$ano;?>
			Local: <? echo $local;?>
				<?php
				$nome = $_SESSION['sessao_nome_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($nome == 'Kaka' )||($nivel == 1)){?>			
						<a href="index.php?tabela=formularioAlterarPartidasDatasHorarios&acao=formularioAlterarPartidasDatasHorarios&partcod=<? echo $partcod;?>">
							Alterar data e hor&aacute;rio
						</a>
				<?
				}
				else{
				echo '';
				}
				?>
							<input type="hidden" name="part_time_a" value="<? echo $part_time_a;?>" /><? echo $part_time_a;?>
							<input type="text" name="part_time_a_placar" size="1" maxlength="1" value="<? echo $part_time_a_placar;?>" style="text-align:center;" disabled="disabled">
							<?php
							$nome = $_SESSION['sessao_nome_usuario'];
							$nivel = $_SESSION['sessao_nivel_usuario'];
							if(($nome == 'Kaka' )||($nivel == 1)){
							?>
								<a href="index.php?tabela=detalhesPartidas&acao=detalhesPartidas&partcod=<? echo $partcod;?>"><img src="images/others/view.png" title="Visualizar Detalhes" width="24px"></a>
								<a href="index.php?tabela=formularioAlterarPartidas&acao=formularioAlterarPartidas&partcod=<? echo $partcod;?>"><img src="images/others/update.png" title="Alterar Dados" width="24px"/></a>
							<?
							}
							else{
							echo 'x';
							}
							?>
							<input type="text" name="part_time_b_placar" size="1" maxlength="1" value="<? echo $part_time_b_placar;?>" style="text-align:center;" disabled="disabled">
							<input type="hidden" name="part_time_b" value="<? echo $part_time_b;?>" /><? echo $part_time_b;?>

				Inicio: <? echo $inicio;?>
				Final: <? echo $final;?>
				Observa&ccedil;&otilde;es: <? echo $obs;?>