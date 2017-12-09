<?php
	require('manutencaoIdeias.php');
		$oquefazer = new manutencaoIdeias();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarIdeias'){
		$oquefazer->listarIdeias();
		require('listarIdeias.php');
	}
	
	if($acao == 'formularioCadastrarIdeias'){
		require('formularioCadastrarIdeias.php');
	}

	if($acao == 'gravarIdeias'){
		$oquefazer->gravarIdeias();
		$oquefazer->listarIdeias();
		require('listarIdeias.php');
	}
	
	if($acao == 'formularioAlterarIdeias'){
		$oquefazer->formularioAlterarIdeias();
		require('formularioAlterarIdeias.php');
	}
	
	if($acao == 'detalhesIdeias'){
		$oquefazer->detalhesIdeias();
		require('detalhesIdeias.php');
	}
	
	if($acao == 'gravarAlteracaoIdeias'){
		$oquefazer->gravarAlteracaoIdeias();
		$oquefazer->listarIdeias();
		require('listarIdeias.php');
	}
	
	if($acao == 'excluirIdeias'){
		$oquefazer->excluirIdeias();
		$oquefazer->listarIdeias();
		require('listarIdeias.php');
	}
	if($acao == 'votarGosteiIdeias'){
		$oquefazer->votarGosteiIdeias();
		$oquefazer->listarIdeias();
		require('listarIdeias.php');
	}	

	if($acao == 'votarNaoGosteiIdeias'){
		$oquefazer->votarNaoGosteiIdeias();
		$oquefazer->listarIdeias();
		require('listarIdeias.php');
	}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>