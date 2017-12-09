<?php
	require('manutencaoRegulamento.php');
		$oquefazer = new manutencaoRegulamento();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarRegulamento'){
		$oquefazer->listarRegulamento();
		require('listarRegulamento.php');
	}
	
	if($acao == 'formularioCadastrarRegulamento'){
		require('formularioCadastrarRegulamento.php');
	}

	if($acao == 'gravarRegulamento'){
		$oquefazer->gravarRegulamento();
		$oquefazer->listarRegulamento();
		require('listarRegulamento.php');
	}
	
	if($acao == 'formularioAlterarRegulamento'){
		$oquefazer->formularioAlterarRegulamento();
		require('formularioAlterarRegulamento.php');
	}
	
	if($acao == 'detalhesRegulamento'){
		$oquefazer->detalhesRegulamento();
		require('detalhesRegulamento.php');
	}
	
	if($acao == 'gravarAlteracaoRegulamento'){
		$oquefazer->gravarAlteracaoRegulamento();
		$oquefazer->listarRegulamento();
		require('listarRegulamento.php');
	}
	
	if($acao == 'excluirRegulamento'){
		$oquefazer->excluirRegulamento();
		$oquefazer->listarRegulamento();
		require('listarRegulamento.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>