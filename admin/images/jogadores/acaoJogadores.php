<?php
	require('manutencaoJogadores.php');
		$oquefazer = new manutencaoJogadores();
			echo ' / acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formularioCadastrarJogadores'){require('formularioCadastrarJogadores.php');}
	if($acao == 'listarJogadores'){$oquefazer->listarJogadores();require('listarJogadores.php');}
	if($acao == 'gravarJogadores'){$oquefazer->gravarJogadores();$oquefazer->listarJogadores();require('listarJogadores.php');}
	if($acao == 'formularioAlterarJogadores'){$oquefazer->formularioAlterarJogadores();require('formularioAlterarJogadores.php');}
	if($acao == 'detalhesJogadores'){$oquefazer->detalhesJogadores();require('detalhesJogadores.php');}
	if($acao == 'gravarAlteracaoJogadores'){$oquefazer->gravarAlteracaoJogadores();$oquefazer->listarJogadores();require('listarJogadores.php');}
	if($acao == 'excluirJogadores'){$oquefazer->excluirJogadores();$oquefazer->listarJogadores();require('listarJogadores.php');}	
	if($acao == 'formularioAlterarFotoJogadores'){$oquefazer->formularioAlterarFotoJogadores();require('formularioAlterarFotoJogadores.php');}
	if($acao == 'gravarAlteracaoFotoJogadores'){$oquefazer->gravarAlteracaoFotoJogadores();$oquefazer->listarJogadores();require('listarJogadores.php');}		
	//if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesJogadores();$oquefazer->listarJogadores();require('detalhesJogadores-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>