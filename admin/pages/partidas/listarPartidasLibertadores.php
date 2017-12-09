<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Partidas Cadastradas</li>
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
				<input type="hidden" value="formularioCadastrarPartidasp1" name="tabela"/>
				<input type="hidden" value="formularioCadastrarPartidasp1" name="acao"/>
				<input type="hidden" value="1" name="torneio"/>
				<?
				}
				else{
				
				}
				?>
			</td>
		</tr>
	</table>
</form>	
<style type="text/css">
.partidas-main{
background: #8dcff5;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#cccccc', GradientType=0);
background: -webkit-linear-gradient(top, #fff 0%,#ccc 100%);
background: -moz-linear-gradient(top, #fff 0%,#ccc 100%);
background: -o-linear-gradient(top, #fff 0%,#ccc 100%);
background: -ms-linear-gradient(top, #fff 0%,#ccc 100%);
background: linear-gradient(top, #fff 0%,#ccc 100%);
	border-radius: 5px;
	height: 40px;
	width: 100%;
	border:0px solid #ccc;
	margin: 15px auto;
}
.partidas-header{
background: #8dcff5;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
	background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
	background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
	background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
	background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
	background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
		border: 0px solid #ccc;
		height: 40px;
		background: #fff;
		padding: 2px;
}
.partidas-header-data{
background: #8dcff5;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 4px;
font-weight: bold;
padding: 5px;
width: 95px;
text-align:left;
}
.partidas-header-rodada{
background: #8dcff5;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 65px;
text-align:left;
}
.partidas-header-local{
background: #8dcff5;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 125px;
text-align:left;
}
.partidas-header-inicio{
background: #8dcff5;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 65px;
text-align:left;
}
.partidas-header-final{
background: #8dcff5;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 65px;
text-align:left;
}
.partidas-header-obs{
background: #cccccc;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 380px;
text-align:left;
}
.partidas-header-opcoes{
background: #cccccc;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 100px;
text-align:left;
}
.partidas-header-opcoes-relegio{
float:left;
border:1px solid #eee;
margin-left:3px;
}
.partidas-header-opcoes-detalhes{
float:left;
border:1px solid #eee;
margin-left:3px;
}
.partidas-header-opcoes-dados{
float:left;
border:1px solid #eee;
margin-left:3px;
}
.partidas-header-confronto{
background: #cccccc;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#ffffff', GradientType=0);
background: -webkit-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -moz-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -o-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: -ms-linear-gradient(top, #cccccc 0%,#ffffff 100%);
background: linear-gradient(top, #cccccc 0%,#ffffff 100%);
border: 1px solid #ccc;
border-radius: 3px;
height: 28px;
float: left;
font-size: 10px;
color: #000;
padding: 5px;
font-weight: bold;
padding: 5px;
width: 190px;
text-align:left;
}
.partidas-header-confronto-time-a{float:left; font-size:12px; text-align:right; border:1px solid #ccc;width: 50px;}
.partidas-header-confronto-time-a-gols{float:left; background:#ccc; border:1px solid #ccc; width: 20px; text-align: center; font-size: 12px;}
.partidas-header-confronto-x{float:left; font-size:12px; text-align:center; border:1px solid #ccc;width: 10px;}
.partidas-header-confronto-time-b-gols{float:left; background:#ccc; border:1px solid #ccc; width: 20px; text-align: center; font-size: 12px;}
.partidas-header-confronto-time-b{float:left; font-size:12px; text-align:left; border:1px solid #ccc;width: 50px;}
</style>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$partcod = $oquefazer->registros->PART_CODIGO;
					$rodada = $oquefazer->registros->PART_RODADA;
					$part_time_a_cod = $oquefazer->registros->PART_TIME_A_COD;
					$part_time_b_cod = $oquefazer->registros->PART_TIME_B_COD;
					$part_time_a = $oquefazer->registros->PART_TIME_A;
					$part_time_b = $oquefazer->registros->PART_TIME_B;
					$part_time_a_placar = $oquefazer->registros->PART_TIME_A_PLACAR;
					$part_time_b_placar = $oquefazer->registros->PART_TIME_B_PLACAR;
					$inicio = $oquefazer->registros->PART_DT_H_I;
					$final	= $oquefazer->registros->PART_DT_H_F;
					$dia	= $oquefazer->registros->PART_DT_D;
					$mes	= $oquefazer->registros->PART_DT_M;
					$ano	= $oquefazer->registros->PART_DT_A;
					$local	= $oquefazer->registros->PART_DT_LOCAL;
					$obs	= $oquefazer->registros->PART_DT_OBS;
					
					$dtcad	= $oquefazer->registros->PART_DT_CAD;
					$dtalt	= $oquefazer->registros->PART_DT_ALT;
			?>
<div class="partidas-main">
	<div class="partidas-header">
		<div class="partidas-header-rodada"><? echo $rodada.'&ordf;&nbsp;';?>RODADA</div>
		<div class="partidas-header-data">Data: <? echo $dia.'/'.$mes.'/'.$ano;?></div>
		<div class="partidas-header-local">Local: <? echo $local;?></div>
		<div class="partidas-header-inicio">Inicio: <? echo $inicio;?></div>
		<div class="partidas-header-final">Final: <? echo $final;?></div>
		<div class="partidas-header-obs">Obs: <? echo $obs;?></div>
		<div class="partidas-header-confronto">
			<div class="partidas-header-confronto-time-a">
				<input type="hidden" name="part_time_a" value="<? echo $part_time_a;?>" />
					<? echo $part_time_a;?>
			</div>
			<div class="partidas-header-confronto-time-a-gols">
				<? echo $part_time_a_placar;?>
			</div>
			<div class="partidas-header-confronto-x">x</div>
			<div class="partidas-header-confronto-time-b-gols">
				<? echo $part_time_b_placar;?>
			</div>
			<div class="partidas-header-confronto-time-b">
				<input type="hidden" name="part_time_b" value="<? echo $part_time_b;?>" />
					<? echo $part_time_b;?>
			</div>
		</div>		
		<div class="partidas-header-opcoes">
			<div class="partidas-header-opcoes-relegio">
				<?php
					$nome = $_SESSION['sessao_nome_usuario'];
					$nivel = $_SESSION['sessao_nivel_usuario'];
					if(($nome == 'Kaka' )||($nivel == 1)){?>			
					<a href="index.php?tabela=formularioAlterarPartidasDatasHorarios&acao=formularioAlterarPartidasDatasHorarios&partcod=<? echo $partcod;?>">
						<img src="images/others/relogio.png" title="Registrar Data e Hora" width="24px" />
					</a>
					<?
					}
					else{
					echo '';
					}
				?>
			</div>
			<div class="partidas-header-opcoes-detalhes">
				<?php
				$nome = $_SESSION['sessao_nome_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($nome == 'Kaka' )||($nivel == 1)){
				?>
					<a href="index.php?tabela=detalhesPartidas&acao=detalhesPartidas&partcod=<? echo $partcod;?>"><img src="images/others/view.png" title="Visualizar Detalhes" width="24px"></a>
				<?
				}
				else{
				echo 'x';
				}
				?>
			</div>
			<div class="partidas-header-opcoes-dados">
				<?php
				$nome = $_SESSION['sessao_nome_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($nome == 'Kaka' )||($nivel == 1)){
				?>
					<a href="index.php?tabela=formularioAlterarPartidas&acao=formularioAlterarPartidas&partcod=<? echo $partcod;?>"><img src="images/others/update.png" title="Alterar Dados" width="24px"/></a>
				<?
				}
				else{
				echo 'x';
				}
				?>
			</div>
		</div>
	</div>
</div>
			<?php
			}
		?>