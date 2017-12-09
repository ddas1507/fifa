<?php
	require('manutencaoClubes.php');
		$oquefazer = new manutencaoClubes();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formularioCadastrarClubes'){require('formularioCadastrarClubes.php');}
	if($acao == 'listarClubes'){$oquefazer->listarClubes();	require('listarClubes.php');}
	if($acao == 'gravarClubes'){$oquefazer->gravarClubes();$oquefazer->listarClubes();require('listarClubes.php');}
	if($acao == 'formularioAlterarClubes'){$oquefazer->formularioAlterarClubes();require('formularioAlterarClubes.php');}
	if($acao == 'detalhesClubes'){$oquefazer->detalhesClubes();$oquefazer->listarJogadores();require('detalhesClubes.php');}
	if($acao == 'formularioCadastrarJogadores'){$oquefazer->detalhesClubes();require('formularioCadastrarJogadores.php');}
	if($acao == 'gravarAlteracaoClubes'){$oquefazer->gravarAlteracaoClubes();$oquefazer->listarClubes();require('listarClubes.php');}
	if($acao == 'excluirClubes'){$oquefazer->excluirClubes();$oquefazer->listarClubes();require('listarClubes.php');}	
	if($acao == 'formularioAlterarFotoClubes'){$oquefazer->formularioAlterarFotoClubes();require('formularioAlterarFotoClubes.php');}
	if($acao == 'gravarAlteracaoFotoClubes'){$oquefazer->gravarAlteracaoFotoClubes();$oquefazer->listarClubes();require('listarClubes.php');}		
	if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesClubes();$oquefazer->listarClubes();require('detalhesClubes-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>