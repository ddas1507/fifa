<?php
	require('manutencaoPartidas.php');
		$oquefazer = new manutencaoPartidas();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formularioCadastrarPartidasp1'){require('formularioCadastrarPartidasp1.php');}
	if($acao == 'formularioCadastrarPartidasp2'){$oquefazer->listarUsuarios();require('formularioCadastrarPartidasp2.php');}
	if($acao == 'formularioCadastrarPartidasp3'){$oquefazer->listarUsuarios2();require('formularioCadastrarPartidasp3.php');}
	if($acao == 'formularioCadastrarPartidasp4'){$oquefazer->listarUsuarios();require('formularioCadastrarPartidasp4.php');}
	if($acao == 'listarPartidas'){$oquefazer->listarPartidas();	require('listarPartidas.php');}
	if($acao == 'gravarPartidas'){$oquefazer->gravarPartidas();$oquefazer->listarPartidas();require('listarPartidas.php');}
	if($acao == 'formularioAlterarPartidas'){$oquefazer->formularioAlterarPartidas();require('formularioAlterarPartidas.php');}
	if($acao == 'detalhesPartidas'){$oquefazer->detalhesPartidas();require('detalhesPartidas.php');}
	if($acao == 'gravarAlteracaoPartidas'){$oquefazer->gravarAlteracaoPartidas();$oquefazer->listarPartidas();require('listarPartidas.php');}
	if($acao == 'excluirPartidas'){$oquefazer->excluirPartidas();$oquefazer->listarPartidas();require('listarPartidas.php');}
	//if($acao == 'formularioAlterarFotoPartidas'){$oquefazer->formularioAlterarFotoPartidas();require('formularioAlterarFotoPartidas.php');}
	//if($acao == 'gravarAlteracaoFotoPartidas'){$oquefazer->gravarAlteracaoFotoPartidas();$oquefazer->listarPartidas();require('listarPartidas.php');}
	//if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesPartidas();$oquefazer->listarPartidas();require('detalhesClubes-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>