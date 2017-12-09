<?php
	require('manutencaoPartidas.php');
		$oquefazer = new manutencaoPartidas();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formularioCadastrarPartidasp1'){require('formularioCadastrarPartidasp1.php');}
	if($acao == 'formularioCadastrarPartidasp2'){$oquefazer->listarUsuarios();require('formularioCadastrarPartidasp2.php');}
	if($acao == 'formularioCadastrarPartidasp3'){$oquefazer->listarUsuarios2();require('formularioCadastrarPartidasp3.php');}
	if($acao == 'formularioCadastrarPartidasp4'){$oquefazer->listarUsuarios();require('formularioCadastrarPartidasp4.php');}
	if($acao == 'listarPartidasLibertadores'){$oquefazer->listarPartidasLibertadores();	require('listarPartidasLibertadores.php');}
	if($acao == 'gravarPartidas'){$oquefazer->gravarPartidas();$oquefazer->listarPartidasLibertadores();require('listarPartidasLibertadores.php');}
	if($acao == 'formularioAlterarPartidas'){$oquefazer->formularioAlterarPartidas();require('formularioAlterarPartidas.php');}
	if($acao == 'formularioAlterarPartidasDatasHorarios'){$oquefazer->formularioAlterarPartidas();require('formularioAlterarPartidasDatasHorarios.php');}
	if($acao == 'gravarAlteracaoPartidasDatasHorarios'){$oquefazer->gravarAlteracaoPartidasHorarios();$oquefazer->listarPartidasLibertadores();require('listarPartidasLibertadores.php');}
	if($acao == 'detalhesPartidas'){$oquefazer->detalhesPartidas();require('detalhesPartidas.php');}
	
	if($acao == 'gravarAlteracaoPartidas'){
		$oquefazer->gravarAlteracaoPartidas();
		$oquefazer->gPL_Time_A_Libertadores();
		$oquefazer->gPL_Time_B_Libertadores();
		$oquefazer->gCL_Time_A_Libertadores();
		$oquefazer->gCL_Time_B_Libertadores();
		$oquefazer->VED_Time_A_Libertadores();
		$oquefazer->VED_Time_B_Libertadores();
		$oquefazer->Pontuacao_Time_A_Libertadores();
		$oquefazer->Pontuacao_Time_B_Libertadores();
		$oquefazer->somarMaisUmJogoNaTabelaDoTimeA_Libertadores();
		$oquefazer->somarMaisUmJogoNaTabelaDoTimeB_Libertadores();
		$oquefazer->listarPartidasLibertadores();
		require('listarPartidasLibertadores.php');
	}
	
	if($acao == 'excluirPartidas'){$oquefazer->excluirPartidas();$oquefazer->listarPartidasLibertadores();require('listarPartidasLibertadores.php');}
	//if($acao == 'formularioAlterarFotoPartidas'){$oquefazer->formularioAlterarFotoPartidas();require('formularioAlterarFotoPartidas.php');}
	//if($acao == 'gravarAlteracaoFotoPartidas'){$oquefazer->gravarAlteracaoFotoPartidas();$oquefazer->listarPartidas();require('listarPartidas.php');}
	//if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesPartidas();$oquefazer->listarPartidas();require('detalhesClubes-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>