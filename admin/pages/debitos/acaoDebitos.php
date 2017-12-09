<?php
	require('manutencaoDebitos.php');
		$oquefazer = new manutencaoDebitos();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formularioCadastrarDebitos'){require('formularioCadastrarDebitos.php');}
	if($acao == 'listarDebitos'){$oquefazer->listarDebitos();	require('listarDebitos.php');}
	if($acao == 'gravarDebitos'){$oquefazer->gravarDebitos();$oquefazer->gravarLancamentos();$oquefazer->listarDebitos();require('listarDebitos.php');}
	if($acao == 'formularioAlterarDebitos'){$oquefazer->formularioAlterarDebitos();require('formularioAlterarDebitos.php');}
	if($acao == 'detalhesDebitos'){$oquefazer->detalhesDebitos();require('detalhesDebitos.php');}
	if($acao == 'formularioCadastrarJogadores'){$oquefazer->detalhesDebitos();require('formularioCadastrarJogadores.php');}
	if($acao == 'gravarAlteracaoDebitos'){$oquefazer->gravarAlteracaoDebitos();$oquefazer->listarDebitos();require('listarDebitos.php');}
	if($acao == 'excluirDebitos'){$oquefazer->excluirDebitos();$oquefazer->listarDebitos();require('listarDebitos.php');}
	if($acao == 'formularioAlterarFotoDebitos'){$oquefazer->formularioAlterarFotoDebitos();require('formularioAlterarFotoDebitos.php');}
	if($acao == 'gravarAlteracaoFotoDebitos'){$oquefazer->gravarAlteracaoFotoDebitos();$oquefazer->listarDebitos();require('listarDebitos.php');}
	//if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesDebitos();$oquefazer->listarDebitos();require('detalhesClubes-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>