<?php
	require('manutencaoCreditos.php');
		$oquefazer = new manutencaoCreditos();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formularioCadastrarCreditos'){require('formularioCadastrarCreditos.php');}
	if($acao == 'listarCreditos'){$oquefazer->listarCreditos();	require('listarCreditos.php');}
	if($acao == 'gravarCreditos'){$oquefazer->gravarCreditos();$oquefazer->gravarLancamentos();$oquefazer->listarCreditos();require('listarCreditos.php');}
	if($acao == 'formularioAlterarCreditos'){$oquefazer->formularioAlterarCreditos();require('formularioAlterarCreditos.php');}
	if($acao == 'detalhesCreditos'){$oquefazer->detalhesCreditos();require('detalhesCreditos.php');}
	if($acao == 'formularioCadastrarJogadores'){$oquefazer->detalhesCreditos();require('formularioCadastrarJogadores.php');}
	if($acao == 'gravarAlteracaoCreditos'){$oquefazer->gravarAlteracaoCreditos();$oquefazer->listarCreditos();require('listarCreditos.php');}
	if($acao == 'excluirCreditos'){$oquefazer->excluirCreditos();$oquefazer->listarCreditos();require('listarCreditos.php');}
	if($acao == 'formularioAlterarFotoCreditos'){$oquefazer->formularioAlterarFotoCreditos();require('formularioAlterarFotoCreditos.php');}
	if($acao == 'gravarAlteracaoFotoCreditos'){$oquefazer->gravarAlteracaoFotoCreditos();$oquefazer->listarCreditos();require('listarCreditos.php');}
	//if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesCreditos();$oquefazer->listarCreditos();require('detalhesClubes-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>