<?php
	require('manutencaoLancamentos.php');
		$oquefazer = new manutencaoLancamentos();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarLancamentos'){$oquefazer->listarLancamentos();	require('listarLancamentos.php');}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>