<form method="POST" action="index.php">
	<table width="100%">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li>Consultar Usu&aacute;rios Cadastrados</li>
					</ul>
				</div>
			</td>
			<td align="right">
				<?php
				$codigoUser = $_SESSION['sessao_codigo_usuario'];
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if(($codigo == $codigoUser)||($nivel == 1)){?>		
				<input 
					class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
					type="submit" value="Novo" name="Novo" title="Novo usu&aacute;rio" 
				/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="tabela"/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="acao"/>
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
#bloco-main{margin:10px auto; height:200px; width:100%; border:0px solid #ccc; }
#bloco-interno-foto-tecnico{margin:10px; float:left; border:1px solid #ccc; width:15%; height:178px;
-moz-box-shadow: 0 2px 3px rgba(0,0,0,0.15);
-webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.15);
box-shadow: 0 2px 3px rgba(0,0,0,0.15);
}

#bloco-interno-dados-um-a{width: 100%; border: 0px solid #ccc; float: left;}
#bloco-interno-dados-um-b{width: 100%; border: 0px solid #ccc; float: left; margin-top: 10px;}
#bloco-interno-dados-um{margin:10px 5px 5px 5px; float:left; border:0px solid #ccc; width:40%; height:178px; 
-moz-box-shadow: 0 2px 3px rgba(0,0,0,0.15);
-webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.15);
box-shadow: 0 2px 3px rgba(0,0,0,0.15);
}
#bloco-interno-dados-dois{margin:10px 10px 5px 5px; float:right; border:0px solid #ccc; width:40%; height:178px;
-moz-box-shadow: 0 2px 3px rgba(0,0,0,0.15);
-webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.15);
box-shadow: 0 2px 3px rgba(0,0,0,0.15);
}
#foto-clube-blocos{
float: left;
border: 0px solid #ccc;
height: 50px;
width: 10%;
margin-left: 10px;
}
#nome-clube-blocos{
height: 50px;
width: 80%;
float: right;
border: 0px solid #ccc;
margin-right: 10px;
font-size: 35px;
text-align: left;
}
#labels-blocos{
float: left;
border: 1px solid #ccc;
width: 20%;
margin: 5px;
}
#dados-blocos{}
#blocos-labels-l{
float: left;
width: 47%;
border: 1px solid #ccc;
margin: 10px;
font-size: 16px;
text-align: left;
}
#blocos-campos-r{
float: right;
width: 43%;
border: 1px solid #ccc;
margin: 10px;
font-size: 16px;
text-align: left;
}
.label-negrito{
	font-weight:bold;
}

.linhas-tr:nth-child(odd){background:#cdcdcd;}
.linhas-tr:nth-child(even){background:#efefef;}
</style>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$usercod = $oquefazer->registros->USUARIO_CODIGO;
					$cargo	= $oquefazer->registros->USUARIO_NIVEL;
					$nome	= $oquefazer->registros->USUARIO_NOME;
					$img	= $oquefazer->registros->USUARIO_IMG;
					$snome	= $oquefazer->registros->USUARIO_SNOME;
					$dtcad	= $oquefazer->registros->USUARIO_DTCAD;
					$dtalt	= $oquefazer->registros->USUARIO_DTALT;
					
					$nomeClubeLibertadores = $oquefazer->registros->CLUBE_LIBERTADORES_NOME;
					$imgClubeLibertadores = $oquefazer->registros->CLUBE_LIBERTADORES_IMG;
					
					$nomeClubeChampions = $oquefazer->registros->CLUBE_CHAMPIONS_NOME;
					$imgClubeChampions = $oquefazer->registros->CLUBE_CHAMPIONS_IMG;
					
					$torneio = $oquefazer->registros->USUARIO_T;
					
					$rl	= $oquefazer->registros->USUARIO_RL;
					$pl	= $oquefazer->registros->USUARIO_PL;
					$jl	= $oquefazer->registros->USUARIO_JL;
					$vl	= $oquefazer->registros->USUARIO_VL;
					$el	= $oquefazer->registros->USUARIO_EL;
					$dl	= $oquefazer->registros->USUARIO_DL;
					$gpl= $oquefazer->registros->USUARIO_GPL;
					$gcl= $oquefazer->registros->USUARIO_GCL;
					$sgl= $gpl - $gcl;
					
					$rc	= $oquefazer->registros->USUARIO_RC;
					$pc	= $oquefazer->registros->USUARIO_PC;
					$jc	= $oquefazer->registros->USUARIO_JC;
					$vc	= $oquefazer->registros->USUARIO_VC;
					$ec	= $oquefazer->registros->USUARIO_EC;
					$dc	= $oquefazer->registros->USUARIO_DC;
					$gpc= $oquefazer->registros->USUARIO_GPC;
					$gcc= $oquefazer->registros->USUARIO_GCC;
					$sgc= $gpc - $gcc;
			?>
					<div id="bloco-main">
						<div id="bloco-interno-foto-tecnico">
							<div style=" width: 100%; overflow: hidden; height: 178px; ">
									<img src="images/usuarios/<?php echo $img;?>" border="0" width="100%"/>
							</div>
						</div>
						<div id="bloco-interno-dados-um" style=" background: url(images/clubes/<?php echo $imgClubeLibertadores;?>)no-repeat 50% 50%; background-size: 130%; ">
							<div id="bloco-interno-dados-um-a" style=" opacity: 0.9; ">
								<div id="foto-clube-blocos"><img src="images/clubes/<?php echo $imgClubeLibertadores;?>" border="0" width="51px" height="51px"/></div>
								<div id="nome-clube-blocos" style=" opacity: 0.9; background: #fff;">
									<?php echo $nomeClubeLibertadores;?> - 
								<a href="index.php?tabela=detalhesUsuarios&acao=detalhesUsuarios&usercod=<?php echo $usercod;?>">Ver Mais</a>
								</div>
							</div>
							<div id="bloco-interno-dados-um-b" style=" opacity: 0.9; ">
								<div id="blocos-labels-l">
									<table width="100%" style="border-collapse:collapse; border: 1px solid #bbb;">
										<tr class="linhas-tr"><td><label class="label-negrito">Jogos:</label></td><td><?php echo $jl;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Vit&oacute;rias:</label></td><td><?php echo $vl;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Empates:</label></td><td><?php echo $el;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Derrotas:</label></td><td><?php echo $dl;?></td></tr>
									</table>
								</div>
								<div id="blocos-campos-r">
									<table border="0" bordercolor="#eee" width="100%" style="border-collapse:collapse; border: 1px solid #ccc">
										<tr class="linhas-tr"><td><label class="label-negrito">Pontos:</label></td><td><?php echo $pl;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Gols Pr&oacute;s:</label></td><td><?php echo $gpl;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Gols Contra:</label></td><td><?php echo $gcl;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">T&eacute;cnico:</label></td><td><?php echo $nome;?></td></tr>
									</table>
								</div>
							</div>
						</div>
						<div id="bloco-interno-dados-dois" style=" background: url(images/clubes/<?php echo $imgClubeChampions;?>)no-repeat 50% 50%; background-size: 130%; ">
							<div id="bloco-interno-dados-um-a" style=" opacity: 0.9; ">
								<div id="foto-clube-blocos"><img src="images/clubes/<?php echo $imgClubeChampions;?>" border="0" width="51px" height="51px"/></div>
								<div id="nome-clube-blocos" style=" opacity: 0.9; background: #fff;">
									<?php echo $nomeClubeChampions;?> - 
									<a href="index.php?tabela=detalhesUsuariosChampions&acao=detalhesUsuariosChampions&usercod=<?php echo $usercod;?>">Ver Mais</a>									
								</div>
							</div>
							<div id="bloco-interno-dados-um-b" style=" opacity: 0.9; ">
								<div id="blocos-labels-l">
									<table width="100%" style="border-collapse:collapse; border: 1px solid #bbb;">
										<tr class="linhas-tr"><td><label class="label-negrito">Jogos:</label></td><td><?php echo $jc;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Vit&oacute;rias:</label></td><td><?php echo $vc;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Empates:</label></td><td><?php echo $ec;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Derrotas:</label></td><td><?php echo $dc;?></td></tr>
									</table>
								</div>
								<div id="blocos-campos-r">
									<table border="0" bordercolor="#eee" width="100%" style="border-collapse:collapse; border: 1px solid #ccc">
										<tr class="linhas-tr"><td><label class="label-negrito">Pontos:</label></td><td><?php echo $pc;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Gols Pr&oacute;s:</label></td><td><?php echo $gpc;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">Gols Contra:</label></td><td><?php echo $gcc;?></td></tr>
										<tr class="linhas-tr"><td><label class="label-negrito">T&eacute;cnico:</label></td><td><?php echo $nome;?></td></tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
			?>