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
	
	if($acao == 'somarGol'){$oquefazer->somarGol();$oquefazer->listarJogadores();require('listarJogadores.php');}
	
	if($acao == 'somarCartaoAmareloIndividual'){$oquefazer->somarCartaoAmareloIndividual();$oquefazer->listarJogadores();require('listarJogadores.php');}
	if($acao == 'somarCartaoVermelhoIndividual'){$oquefazer->somarCartaoVermelhoIndividual();$oquefazer->listarJogadores();require('listarJogadores.php');}

	if($acao == 'zerarCartoesAmarelosindividuais'){$oquefazer->zerarCartoesAmarelosindividuais();$oquefazer->listarJogadores();require('listarJogadores.php');}
	if($acao == 'zerarCartoesVermelhosindividuais'){$oquefazer->zerarCartoesVermelhosindividuais();$oquefazer->listarJogadores();require('listarJogadores.php');}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>