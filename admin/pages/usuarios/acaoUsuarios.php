<?php
	require('manutencaoUsuarios.php');
		$oquefazer = new manutencaoUsuarios();
			echo 'Acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarUsuarios2'){$oquefazer->listarUsuarios2();require('listarUsuarios2.php');}	
	if($acao == 'listarClassificacao'){$oquefazer->listarClassificacao();require('listarClassificacao.php');}	

	if($acao == 'escolherTimeLibertadores'){$oquefazer->escolherTimeLibertadores();require('escolherTimeLibertadores.php');}
	if($acao == 'escolherTimeChampions'){$oquefazer->escolherTimeChampions();require('escolherTimeChampions.php');}

	if($acao == 'selecionarClubeLibertadores'){$oquefazer->selecionarClubeLibertadores();$oquefazer->detalhesUsuarios();$oquefazer->listarPartidas();require('detalhesUsuarios.php');}
	if($acao == 'selecionarClubeChampions'){$oquefazer->selecionarClubeChampions();$oquefazer->detalhesUsuarios();$oquefazer->listarPartidas();require('detalhesUsuarios.php');}

	if($acao == 'zerarTabelaClassificacao'){$oquefazer->zerarTabelaClassificacao();$oquefazer->listarClassificacao();require('listarClassificacao.php');}

	if($acao == 'formularioCadastrarUsuarios'){require('formularioCadastrarUsuarios.php');}
	
	if($acao == 'detalhesUsuarios'){$oquefazer->detalhesUsuarios();$oquefazer->listarPartidas();require('detalhesUsuarios.php');}
	if($acao == 'detalhesUsuariosLibertadores'){$oquefazer->detalhesUsuariosLibertadores();$oquefazer->listarPartidasLibertadores();require('detalhesUsuariosLibertadores.php');}
	if($acao == 'detalhesUsuariosChampions'){$oquefazer->detalhesUsuariosChampions();$oquefazer->listarPartidasChampions();require('detalhesUsuariosChampions.php');}

	if($acao == 'formularioAlterarUsuarios'){$oquefazer->formularioAlterarUsuarios();require('formularioAlterarUsuarios.php');}
	if($acao == 'formularioAlterarFotoUsuarios'){$oquefazer->formularioAlterarFotoUsuarios();require('formularioAlterarFotoUsuarios.php');}
	if($acao == 'formularioAlterarFotoFundoUsuarios'){$oquefazer->formularioAlterarFotoFundoUsuarios();require('formularioAlterarFotoFundoUsuarios.php');}
	if($acao == 'formularioAlterarMusicaLibertadores'){$oquefazer->formularioAlterarMusicaLibertadores();require('formularioAlterarMusicaLibertadores.php');}
	if($acao == 'formularioAlterarMusicaChampions'){$oquefazer->formularioAlterarMusicaChampions();require('formularioAlterarMusicaChampions.php');}

	if($acao == 'gravarAlteracaoUsuarios'){$oquefazer->gravarAlteracaoUsuarios();$oquefazer->detalhesUsuarios();require('detalhesUsuarios.php');}
	if($acao == 'gravarAlteracaoFotoUsuarios'){$oquefazer->gravarAlteracaoFotoUsuarios();$oquefazer->listarUsuarios2();require('listarUsuarios2.php');}
	if($acao == 'gravarAlteracaoFotoFundoUsuarios'){$oquefazer->gravarAlteracaoFotoFundoUsuarios();$oquefazer->listarUsuarios2();require('listarUsuarios2.php');}		
	if($acao == 'gravarAlteracaoMusicaUsuariosLibertadores'){$oquefazer->gravarAlteracaoMusicaUsuariosLibertadores();$oquefazer->detalhesUsuariosLibertadores();$oquefazer->listarPartidas();require('detalhesUsuariosLibertadores.php');}	
	if($acao == 'gravarAlteracaoMusicaUsuariosChampions'){$oquefazer->gravarAlteracaoMusicaUsuariosChampions();$oquefazer->detalhesUsuariosChampions();$oquefazer->listarPartidas();require('detalhesUsuariosChampions.php');}	

	if($acao == 'gravarUsuarios'){$oquefazer->gravarUsuarios();$oquefazer->listarUsuarios2();require('listarUsuarios2.php');}
	if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesUsuarios();$oquefazer->listarUsuarios2();require('detalhesUsuarios-listar-imagens.php');}	

	if($acao == 'excluirUsuarios'){$oquefazer->excluirUsuarios();$oquefazer->listarUsuarios2();require('listarUsuarios2.php');}	
?>