<?php
	require('manutencaoImagens.php');
		$oquefazer = new manutencaoImagens();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarImagens'){
		$oquefazer->listarImagens();
		require('listarImagens.php');
	}
	
	if($acao == 'formularioCadastrarImagens'){
		require('formularioCadastrarImagens.php');
	}

	if($acao == 'gravarImagens'){
		$oquefazer->gravarImagens();
		$oquefazer->listarImagens();
		require('listarImagens.php');
	}
	
	if($acao == 'excluirImagens'){
		$oquefazer->excluirImagens();
		$oquefazer->listarImagens();
		require('listarImagens.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>